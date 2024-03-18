<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Research;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ResarchesController extends Controller
{
    use UploadImageTrait;

    // ================================================================
    // ======================== index Function ========================
    // Created By : Ahmad Alsakhen
    // ================================================================
    public function index(Request $request, Route $route)
    {


        try {
            $researches = new Research();
            $researches = $researches->select('*')->orderBy('created_at', 'asc')->get();

            return view('admin.researches.index', compact(
                'researches',
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
    // Created By : Ahmad Alsakhen
    // ================================================================
    public function create(Route $route)
    {
        try {
            return view('admin.researches.create');
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
    // Created By : Ahmad Alsakhen
    // ================================================================
    public function store(Request $request, Route $route)
    {
        try {
            // Upload Image Section :
            if (isset($request->image)) {
                $orginal_image = $request->file('image');
                $upload_location = 'storage/researches/';
                $file_name = $this->saveFile($orginal_image, $upload_location);
                $research_image   = $file_name;
            } else {
                $research_image = null;
            }

            // Upload  File Section :
            if (isset($request->file)) {
                // store the file with the same name of the title
                $orginal_file = $request->file('file');
                $upload_location = 'storage/researches/';
                $file_name = $this->saveFile($orginal_file, $upload_location);
                $research_file   = $file_name;
            } else {
                $research_file = null;
            }

            $created_data = [
                'title' => $request->title,
                'status' => $request->status,
                'description' => $request->description,
                'image' => $research_image,
                'file' => $research_file,
            ];

            DB::transaction(function () use ($created_data) {
                Research::create($created_data);
            });

            return redirect()->route('super_admin.researches.index')->with('success', 'The data has been successfully added');
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
    // Created By : Ahmad Alsakhen
    // ================================================================
    public function edit($id, Route $route)
    {
        try {
            $research = Research::find($id);
            if ($research) {
                return view('admin.researches.edit', compact('research'));
            } else {
                return redirect()->route('super_admin.researches.index')->with('danger', 'This record does not exist in the records');
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
    // Created By : Ahmad Alsakhen
    // ================================================================
    public function update($id, Request $request, Route $route)
    {
        try {
            $research = Research::find($id);
            $old_image = $research->image;
            $old_file = $research->file;
            if ($research) {
                // Upload Image Section :
                if (isset($request->image)) {
                    $orginal_image = $request->file('image');
                    $upload_location = 'storage/researches/';
                    $file_name = $this->saveFile($orginal_image, $upload_location);
                    $research_image   = $file_name;
                } else {
                    $research_image = $research->image;
                }

                // Upload  File Section :
                if (isset($request->file)) {
                    // store the file with the same name of the title
                    $orginal_file = $request->file('file');
                    $upload_location = 'storage/researches/';
                    $file_name = $this->saveFile($orginal_file, $upload_location);
                    $research_file   = $file_name;
                } else {
                    $research_file = $research->file;
                }


                $updated_data = [
                    'title' => $request->title,
                    'status' => $request->status,
                    'description' => $request->description,
                    'image' => $research_image,
                    'file' => $research_file,
                ];
                DB::transaction(function () use ($updated_data, $research) {
                    $research->update($updated_data);
                });

                // Delete Old Image and File if the user upload new one
                if (isset($request->image) && $old_image) {
                    if (File::exists($old_image)) {
                        unlink($old_image);
                    }
                }
                if (isset($request->file) && $old_file) {
                    if (File::exists($old_file)) {
                        unlink($old_file);
                    }
                }

                return redirect()->route('super_admin.researches.index')->with('success', 'The data has been successfully updated');
            } else {
                return redirect()->route('super_admin.researches.index')->with('danger', 'This record does not exist in the records');
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
    // ======================= Delete Function ========================
    // Created By : Ahmad Alsakhen
    // ================================================================
    public function destroy($id, Route $route)
    {
        try {
            $research = Research::find($id);
            if ($research) {
                $old_image = $research->image;
                $old_file = $research->file;
                DB::transaction(function () use ($research, $old_image, $old_file) {
                    $research->delete();
                });

                // Delete Old Image and File if the user upload new one
                if ($old_image) {
                    if (File::exists($old_image)) {
                        unlink($old_image);
                    }
                }
                if ($old_file) {
                    if (File::exists($old_file)) {
                        unlink($old_file);
                    }
                }

                return redirect()->route('super_admin.researches.index')->with('success', 'The data has been successfully deleted');
            } else {
                return redirect()->route('super_admin.researches.index')->with('danger', 'This record does not exist in the records');
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
    // ======================= Toggle Function ==========================
    // Created By : Ahmad Alsakhen
    // ================================================================
    public function toggleStatus($id, Route $route)
    {
        try {
            $research = Research::find($id);
            if ($research) {
                $status = $research->status;
                if ($status == 1) {
                    $research->update(['status' => 0]);
                } else {
                    $research->update(['status' => 1]);
                }
                return redirect()->route('super_admin.researches.index')->with('success', 'The data has been successfully updated');
            } else {
                return redirect()->route('super_admin.researches.index')->with('danger', 'This record does not exist in the records');
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
