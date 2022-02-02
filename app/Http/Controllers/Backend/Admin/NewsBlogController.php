<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Blogs\StoreBlogFormRequest;
use App\Http\Requests\Backend\Blogs\UpdateBlogFormRequest;
use App\Models\Blog;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class NewsBlogController extends Controller
{
    use UploadImageTrait;

    // ================================================================
    // ======================== index Function ========================
    // Created By : Mohammed Salah
    // ================================================================
    public function index(Request $request, Route $route)
    {


        try {
            $news_blogs = new Blog();
            $news_blogs = $news_blogs->select('*')->orderBy('created_at', 'asc')->get();

            return view('admin.news_blogs.index', compact(
                'news_blogs',
            ));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ======================= Create Function ========================
    // Created By : Mohammed Salah
    // ================================================================
    public function create(Route $route)
    {
        try {
            return view('admin.news_blogs.create');
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ======================= Store Function =========================
    // Created By : Mohammed Salah
    // ================================================================
    public function store(StoreBlogFormRequest $request, Route $route)
    {
        try {
            // Upload Image Section :
            if (isset($request->image)) {
                $orginal_image = $request->file('image');
                $upload_location = 'storage/blogs/';
                $original_name = $orginal_image->getClientOriginalName();
                $file_name = $this->saveFileWithOriginalName('blogs', 'image', $orginal_image, $original_name, $upload_location);
                $news_blog_main_image   = $file_name;
            } else {
                $news_blog_main_image = null;
            }

            $created_data = [
                'user_id' => auth()->user()->id,
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
                'status' => $request->status,
                'desc_ar' => $request->desc_ar,
                'desc_en' => $request->desc_en,
                'alias_name_ar' => str_replace(array(' ','"','>','<','#','%','|','/'),'-',$request->title_ar),
                'alias_name_en' => str_replace(array(' ','"','>','<','#','%','|','/'),'-',$request->title_en),
                'image' => $news_blog_main_image,
            ];

            DB::transaction(function () use ($created_data) {
                $base = Blog::create($created_data);
            });

            return redirect()->route('super_admin.news_blogs-index')->with('success', 'Data has been added successfully');
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ======================== show Function =========================
    // Created By : Mohammed Salah
    // ================================================================
    public function show($id, Route $route)
    {
        try {
            $news_blog = Blog::find($id);

            if ($news_blog) {
                // return $news_blog;
                return view('admin.news_blogs.show', compact('news_blog'));
            } else {
                return redirect()->route('super_admin.news_blogs-index')->with('danger', 'This record is not in the records');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ======================== Edit Function =========================
    // Created By : Mohammed Salah
    // ================================================================
    public function edit($id, Route $route)
    {
        try {
            $news_blog = Blog::find($id);

            if ($news_blog) {
                return view('admin.news_blogs.edit', compact('news_blog'));
            } else {
                return redirect()->route('super_admin.news_blogs-index')->with('danger', 'This record is not in the records');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ======================= Update Function ========================
    // Created By : Mohammed Salah
    // ================================================================
    public function update($id, UpdateBlogFormRequest $request, Route $route)
    {
        try {
            $news_blog = Blog::find($id);
            if ($news_blog) {
                // General Updated Data :
                $update_data = [
                    'title_ar' => $request->title_ar,
                    'title_en' => $request->title_en,
                    'status' => $request->status,
                    'desc_ar' => $request->desc_ar,
                    'desc_en' => $request->desc_en,
                    'alias_name_ar' => str_replace(array(' ','"','>','<','#','%','|','/'),'-',$request->title_ar),
                    'alias_name_en' => str_replace(array(' ','"','>','<','#','%','|','/'),'-',$request->title_en),
                ];
                // Upload Image Section :
                if (isset($request->image)) {
                    $orginal_image = $request->file('image');
                    $upload_location = 'storage/blogs/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $file_name = $this->saveFileWithOriginalName('blogs', 'image', $orginal_image, $original_name, $upload_location);
                    $update_data['image'] = $file_name;
                }

                DB::transaction(function () use ($update_data, $id) {
                    Blog::find($id)->update($update_data);
                });
                return redirect()->route('super_admin.news_blogs-index')->with('success', 'The data has been successfully updated');
            } else {
                return redirect()->route('super_admin.news_blogs-index')->with('danger', 'This record does not exist in the records');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ======================== softDelete Function ===================
    // Created By : Mohammed Salah
    // ================================================================
    public function softDelete($id, Route $route)
    {
        try {
            $news_blog = Blog::find($id);
            if ($news_blog) {
                DB::transaction(function () use ($news_blog) {
                    $news_blog->delete();
                });
                return redirect()->route('super_admin.news_blogs-index')->with('success', 'The deletion process has been successful');
            } else {
                return redirect()->route('super_admin.news_blogs-index')->with('danger', 'This record is not in the records');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ====================== show Soft Delete ========================
    // Created By : Mohammed Salah
    // ================================================================
    public function showSoftDelete(Request $request, Route $route)
    {
        try {
            $news_blogs = new Blog();
            $news_blogs = $news_blogs->onlyTrashed()->select('*')->orderBy('created_at', 'asc')->get();
            return view('admin.news_blogs.trashed', compact(
                'news_blogs',
            ));
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }

    // ================================================================
    // ==================== soft Delete Restore =======================
    // Created By : Mohammed Salah
    // ================================================================
    public function softDeleteRestore($id, Route $route)
    {
        try {
            $news_blog = Blog::onlyTrashed()->find($id);
            if ($news_blog) {
                DB::transaction(function () use ($news_blog) {
                    $news_blog->restore();
                });
                return redirect()->route('super_admin.news_blogs-index')->with('success', 'Restore Completed Successfully');
            } else {
                return redirect()->route('super_admin.news_blogs-index')->with('danger', 'This section does not exist in the records');
            }
        } catch (\Throwable $th) {
            $function_name =  $route->getActionName();
            $check_old_errors = new SupportTicket();
            $check_old_errors = $check_old_errors->select('*')->where([
                'error_location' => $th->getFile(),
                'error_description' => $th->getMessage(),
                'function_name' => $function_name,
                'error_line' => $th->getLine(),
            ])->get();

            if ($check_old_errors->count() == 0) {
                $new_error_ticket = SupportTicket::create([
                    'error_location' => $th->getFile(),
                    'error_description' => $th->getMessage(),
                    'function_name' => $function_name,
                    'error_line' =>  $th->getLine(),
                ]);
                $end_error_ticket = $new_error_ticket;
            } else {
                $end_error_ticket = $check_old_errors->first();
            }
            return view('errors.support_tickets', compact('th', 'function_name', 'end_error_ticket'));
        }
    }
}
