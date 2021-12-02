<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Colors\ColorsStorFromRequest;
use App\Models\MainColor;
use App\Models\SupportTicket;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class SizeColorController extends Controller
{

    // =======================================================================================
    // ============================= Colors Index Function ===================================
    // ============================= By : Mohammed Salah =====================================
    // =======================================================================================
    function colorIndex(Route $route){
        try {

            $colors = MainColor::get();
            return view('admin.color_size.index',compact('colors'));

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

    // =======================================================================================
    // ============================= colors Store Function ===================================
    // ============================= By : Mohammed Salah =====================================
    // =======================================================================================
    function colorStore(ColorsStorFromRequest $request,Route $route){
        try {

            $created_data = [
                'name_ar'=>$request->name_ar,
                'name_en'=>$request->name_en,
                'color_code'=>$request->color_code,
                'updated_by'=>auth()->user()->id,
            ];

            MainColor::create($created_data);

            return redirect()->back()->with('success','Added Successfully');

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
