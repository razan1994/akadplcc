<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Specialities\StoreSpecialityFormRequest;
use App\Http\Requests\Backend\Specialities\UpdateSpecialityFormRequest;
use App\Models\DoctorSpeciality;
use App\Models\SupportTicket;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SpecialityController extends Controller
{
     // ================================================================
    // ======================== index Function ========================
    // ================================================================
    public function index(Request $request, Route $route)
    {
        try {
            $specialities = DoctorSpeciality::select('*')->orderBy('created_at', 'asc')->get();
            return view('admin.specialities.index', compact('specialities'));
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
    // ================================================================
    public function create(Route $route)
    {
        try {
            return view('admin.specialities.create');
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
    // ================================================================
    public function store(StoreSpecialityFormRequest $request, Route $route)
    {
        try {

            $created_data = [
                'name_ar' => $request->name_ar,
                'name_en' => $request->name_en,
                'updated_by' => auth()->user()->id,
                'alias_name_en'=>str_replace(array(' ','"','>','<','#','%','|','/'),'-',$request->name_en),
                'alias_name_ar'=>str_replace(array(' ','"','>','<','#','%','|','/'),'-',$request->name_ar)
            ];

            DB::transaction(function () use ($created_data) {
                DoctorSpeciality::create($created_data);
            });

            return redirect()->route('super_admin.specialities-index')->with('success', 'The data has been successfully updated');
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
    // ================================================================
    public function edit($category_id, Route $route)
    {
        try {
            $speciality = DoctorSpeciality::find($category_id);
            if ($speciality) {
                return view('admin.specialities.edit', compact('speciality'));
            } else {
                return redirect()->route('super_admin.specialities-index')->with('danger', 'This record is not in the records');
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
    // ================================================================
    public function update($speciality_id, UpdateSpecialityFormRequest $request, Route $route)
    {
        try {
            $speciality = DoctorSpeciality::find($speciality_id);

            if ($speciality) {
                // Standard Updated Data :
                $update_data['name_ar'] = $request->name_ar;
                $update_data['name_en'] = $request->name_en;
                $update_data['updated_by'] = auth()->user()->id;
                $update_data['alias_name_en'] = str_replace(array(' ','"','>','<','#','%','|','/'),'-',$update_data['name_en']);
                $update_data['alias_name_ar'] = str_replace(array(' ','"','>','<','#','%','|','/'),'-',$update_data['name_ar']);

                DB::table('doctor_specialities')->where('id', $speciality_id)->update($update_data);

                return redirect()->route('super_admin.specialities-index')->with('success', 'The data has been successfully updated');
            } else {
                return redirect()->route('super_admin.specialities-index')->with('danger', 'This record does not exist in the records');
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
