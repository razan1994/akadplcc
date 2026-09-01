<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class GalleryController extends Controller
{
    use UploadImageTrait;

    public function index(Route $route): View
    {
        try {
            $galleryItems = GalleryItem::query()
                ->orderBy('sort_order')
                ->orderByDesc('id')
                ->get();

            return view('admin.gallery.index', compact('galleryItems'));
        } catch (\Throwable $th) {
            return $this->supportError($th, $route);
        }
    }

    public function create(Route $route): View
    {
        try {
            return view('admin.gallery.create');
        } catch (\Throwable $th) {
            return $this->supportError($th, $route);
        }
    }

    public function store(Request $request, Route $route): RedirectResponse|View
    {
        try {
            $validated = $request->validate([
                'title_ar' => ['nullable', 'string', 'max:255'],
                'title_en' => ['nullable', 'string', 'max:255'],
                'type' => ['required', 'in:image,video'],
                'file' => [
                    'required',
                    'file',
                    $request->input('type') === 'video'
                        ? 'mimes:mp4,webm,ogg,mov|max:102400'
                        : 'mimes:jpg,jpeg,png,webp,gif|max:10240',
                ],
                'poster' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
                'sort_order' => ['nullable', 'integer', 'min:0'],
                'status' => ['required', 'in:1,2'],
            ]);

            $data = $this->formData($validated);
            $data['file_path'] = $this->saveFile(
                $request->file('file'),
                $validated['type'] === 'video' ? 'storage/gallery/videos/' : 'storage/gallery/images/'
            );

            if ($request->hasFile('poster')) {
                $data['poster_path'] = $this->saveFile(
                    $request->file('poster'),
                    'storage/gallery/posters/'
                );
            }

            DB::transaction(fn () => GalleryItem::create($data));

            return redirect()->route('super_admin.gallery-index')
                ->with('success', 'Gallery item created successfully.');
        } catch (\Illuminate\Validation\ValidationException $th) {
            throw $th;
        } catch (\Throwable $th) {
            return $this->supportError($th, $route);
        }
    }

    public function edit(int $id, Route $route): View|RedirectResponse
    {
        try {
            $galleryItem = GalleryItem::find($id);

            if (!$galleryItem) {
                return redirect()->route('super_admin.gallery-index')
                    ->with('danger', 'This gallery item does not exist.');
            }

            return view('admin.gallery.edit', compact('galleryItem'));
        } catch (\Throwable $th) {
            return $this->supportError($th, $route);
        }
    }

    public function update(int $id, Request $request, Route $route): RedirectResponse|View
    {
        try {
            $galleryItem = GalleryItem::find($id);

            if (!$galleryItem) {
                return redirect()->route('super_admin.gallery-index')
                    ->with('danger', 'This gallery item does not exist.');
            }

            $validated = $request->validate([
                'title_ar' => ['nullable', 'string', 'max:255'],
                'title_en' => ['nullable', 'string', 'max:255'],
                'type' => ['required', 'in:image,video'],
                'file' => [
                    'nullable',
                    'file',
                    $request->input('type') === 'video'
                        ? 'mimes:mp4,webm,ogg,mov|max:102400'
                        : 'mimes:jpg,jpeg,png,webp,gif|max:10240',
                ],
                'poster' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
                'sort_order' => ['nullable', 'integer', 'min:0'],
                'status' => ['required', 'in:1,2'],
            ]);

            $data = $this->formData($validated);

            if ($request->hasFile('file')) {
                $oldFile = $galleryItem->file_path;
                $data['file_path'] = $this->saveFile(
                    $request->file('file'),
                    $validated['type'] === 'video' ? 'storage/gallery/videos/' : 'storage/gallery/images/'
                );
                $this->deletePublicFile($oldFile);
            }

            if ($request->hasFile('poster')) {
                $oldPoster = $galleryItem->poster_path;
                $data['poster_path'] = $this->saveFile(
                    $request->file('poster'),
                    'storage/gallery/posters/'
                );
                $this->deletePublicFile($oldPoster);
            }

            DB::transaction(fn () => $galleryItem->update($data));

            return redirect()->route('super_admin.gallery-index')
                ->with('success', 'Gallery item updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $th) {
            throw $th;
        } catch (\Throwable $th) {
            return $this->supportError($th, $route);
        }
    }

    public function softDelete(int $id, Route $route): RedirectResponse|View
    {
        try {
            $galleryItem = GalleryItem::find($id);

            if (!$galleryItem) {
                return redirect()->route('super_admin.gallery-index')
                    ->with('danger', 'This gallery item does not exist.');
            }

            $galleryItem->delete();

            return redirect()->route('super_admin.gallery-index')
                ->with('success', 'Gallery item archived successfully.');
        } catch (\Throwable $th) {
            return $this->supportError($th, $route);
        }
    }

    public function showSoftDelete(Route $route): View
    {
        try {
            $galleryItems = GalleryItem::onlyTrashed()
                ->orderByDesc('deleted_at')
                ->get();

            return view('admin.gallery.trashed', compact('galleryItems'));
        } catch (\Throwable $th) {
            return $this->supportError($th, $route);
        }
    }

    public function softDeleteRestore(int $id, Route $route): RedirectResponse|View
    {
        try {
            $galleryItem = GalleryItem::onlyTrashed()->find($id);

            if (!$galleryItem) {
                return redirect()->route('super_admin.gallery-showSoftDelete')
                    ->with('danger', 'This gallery item does not exist in the archive.');
            }

            $galleryItem->restore();

            return redirect()->route('super_admin.gallery-index')
                ->with('success', 'Gallery item restored successfully.');
        } catch (\Throwable $th) {
            return $this->supportError($th, $route);
        }
    }

    private function formData(array $validated): array
    {
        return [
            'title_ar' => $validated['title_ar'] ?? null,
            'title_en' => $validated['title_en'] ?? null,
            'type' => $validated['type'],
            'sort_order' => $validated['sort_order'] ?? 0,
            'status' => $validated['status'],
        ];
    }

    private function deletePublicFile(?string $path): void
    {
        if (!$path) {
            return;
        }

        $absolutePath = public_path(ltrim($path, '/'));
        if (File::exists($absolutePath)) {
            File::delete($absolutePath);
        }
    }

    private function supportError(\Throwable $th, Route $route): View
    {
        $function_name = $route->getActionName();
        $end_error_ticket = SupportTicket::firstOrCreate([
            'error_location' => $th->getFile(),
            'error_description' => $th->getMessage(),
            'function_name' => $function_name,
            'error_line' => $th->getLine(),
        ]);

        return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
    }
}
