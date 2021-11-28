<?php

namespace App\Http\Controllers\Backend\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Banners\UpdateBannerFormRequest;
use App\Models\Banner;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Route;

class BannerController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    // ================================================================
    // ======================== index Function ========================
    // ================================================================
    public function index(Request $request, Route $route)
    {
        try {
            $banner = Banner::first();
            return view('admin.banners.index', compact('banner'));
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
    // ======================== edit  Function ========================
    // ================================================================
    public function edit(Request $request, Route $route)
    {
        try {
            $banner = Banner::first();
            return view('admin.banners.edit', compact('banner'));
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
    // ================================================================
    public function update(UpdateBannerFormRequest $request,  Route $route)
    {
        try {
            $banner = Banner::first();
            if ($banner) {
                // Banner 1 :
                if (isset($request->image_1)) {
                    $orginal_image = $request->file('image_1');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_1'] = $this->saveFileWithOriginalName('banners', 'image_1', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_1_url))
                    $update_data['banner_1_url'] = $request->banner_1_url;
                // if (isset($request->status_1))
                    $update_data['status_1'] = $request->status_1;

                    // Banner 2 :
                if (isset($request->image_2)) {
                    $orginal_image = $request->file('image_2');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_2'] = $this->saveFileWithOriginalName('banners', 'image_2', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_2_url))
                    $update_data['banner_2_url'] = $request->banner_2_url;
                // if (isset($request->status_2))
                    $update_data['status_2'] = $request->status_2;

                // Banner 3 :
                if (isset($request->image_3)) {
                    $orginal_image = $request->file('image_3');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_3'] = $this->saveFileWithOriginalName('banners', 'image_3', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_3_url))
                    $update_data['banner_3_url'] = $request->banner_3_url;
                // if (isset($request->status_3))
                    $update_data['status_3'] = $request->status_3;

                // Banner 4 :
                if (isset($request->image_4)) {
                    $orginal_image = $request->file('image_4');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_4'] = $this->saveFileWithOriginalName('banners', 'image_4', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_4_url))
                    $update_data['banner_4_url'] = $request->banner_4_url;
                // if (isset($request->status_4))
                    $update_data['status_4'] = $request->status_4;

                // Banner 5 :
                if (isset($request->image_5)) {
                    $orginal_image = $request->file('image_5');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_5'] = $this->saveFileWithOriginalName('banners', 'image_5', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_5_url))
                    $update_data['banner_5_url'] = $request->banner_5_url;
                // if (isset($request->status_5))
                    $update_data['status_5'] = $request->status_5;

                // Banner 6 :
                if (isset($request->image_6)) {
                    $orginal_image = $request->file('image_6');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_6'] = $this->saveFileWithOriginalName('banners', 'image_6', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_6_url))
                    $update_data['banner_6_url'] = $request->banner_6_url;
                // if (isset($request->status_6))
                    $update_data['status_6'] = $request->status_6;

                // Banner 7 :
                if (isset($request->image_7)) {
                    $orginal_image = $request->file('image_7');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_7'] = $this->saveFileWithOriginalName('banners', 'image_7', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_7_url))
                    $update_data['banner_7_url'] = $request->banner_7_url;
                // if (isset($request->status_7))
                    $update_data['status_7'] = $request->status_7;

                // Banner 8 :
                if (isset($request->image_8)) {
                    $orginal_image = $request->file('image_8');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_8'] = $this->saveFileWithOriginalName('banners', 'image_8', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_8_url))
                    $update_data['banner_8_url'] = $request->banner_8_url;
                // if (isset($request->status_8))
                    $update_data['status_8'] = $request->status_8;

                // Banner 9 :
                if (isset($request->image_9)) {
                    $orginal_image = $request->file('image_9');
                    $upload_location = 'storage/banners/';
                    $original_name = $orginal_image->getClientOriginalName();
                    $update_data['image_9'] = $this->saveFileWithOriginalName('banners', 'image_9', $orginal_image, $original_name, $upload_location);
                }
                // if (isset($request->banner_9_url))
                    $update_data['banner_9_url'] = $request->banner_9_url;
                // if (isset($request->status_9))
                    $update_data['status_9'] = $request->status_9;

                if (isset($update_data)) {
                    DB::transaction(function () use ($update_data, $banner) {
                        DB::table('banners')->where('id', $banner->id)->update($update_data);
                    });
                } else {
                    return redirect()->route('super_admin.banners-index')->with('danger', 'No updates have been made');
                }
                return redirect()->route('super_admin.banners-index')->with('success', 'The data has been successfully updated');
            } else {
                return redirect()->route('super_admin.banners-index')->with('danger', 'This record does not exist in the records');
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
