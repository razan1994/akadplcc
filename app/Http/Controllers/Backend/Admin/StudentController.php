<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\PublicValue;
use App\Models\Student;
use App\Models\SubscriptionRequest;
use App\Models\SupportTicket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class StudentController extends Controller
{
    public function index(Request $request, Route $route)
    {

        try {
            $students = Student::with(['lastPayment'])->get();
            return view('admin.students.index', compact('students'));
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


    public function toggleStatus(Request $request, Route $route)
    {
        try {
            $student = Student::find($request->id);
            if ($student->user_status == 'Active') {
                $student->user_status = 3;
            } else {
                $student->user_status = 2;
            }
            $student->save();
            return redirect()->back()->with('success', 'Status Updated');
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


    public function subscriptionRequests(Request $request, Route $route, $status = 'pending')
    {
        if (!in_array($status, ['approved', 'pending', 'rejected'])) {
            return redirect()->back()->with('error', 'Invalid status');
        }
        try {
            $requests = SubscriptionRequest::where('status', $status)->get();
            return view('admin.students.subscription_requests', compact('requests', 'status'));
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

    public function approveSubscriptionRequest(Request $request, Route $route)
    {
        try {
            $registeration_amount = (float) PublicValue::where('key', 'registeration_amount')->first()->value;
            if (!$registeration_amount) {
                return redirect()->back()->with('danger', 'قيمة التسجيل غير موجودة');
            }

            // --------- Update Subscription Request Status ---------
            $subscription_request = SubscriptionRequest::find($request->id);
            if (!$subscription_request) {
                return redirect()->back()->with('danger', 'Request Not Found');
            } else if ($subscription_request->status == 'approved') {
                return redirect()->back()->with('danger', 'Request Already Approved');
            }



            //--------- Check if student already paid and registeration date not ended ---------
            $student = Student::find($subscription_request->user_id);
            if (!$student) {
                return redirect()->back()->with('danger', 'الطالب غير موجود');
            }
            $last_payment = $student->payments()->latest()->first();
            if ($last_payment && $last_payment->payment_status == 'paid' && $last_payment->due_at > Carbon::now()) {
                $subscription_request->status = 'rejected';
                $subscription_request->save();
                return redirect()->back()->with('success', 'الطالب مسجل بالفعل');
            }

            $subscription_request->status = 'approved';
            $subscription_request->save();

            // --------- Create Payment --------- 
            $payment = Payment::create([
                'payment_method' => 'wallet',
                'status' => 'accepted',
                'payment_status' => 'paid',
                'amount' => $registeration_amount,
                'student_id' => $student->id,
                'due_at' => Carbon::now()->addYear(),
            ]);


            // --------- Add Points To The Referral Student If Exist ---------
            if ($student->referral_code) {
                $referral_student = Student::where('own_code', $student->referral_code)->first();
                $old_points = $referral_student->points;
                if ($referral_student) {
                    $referral_student->update([
                        'points' => $old_points + (int) 25,
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Request Approved');
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

    public function rejectSubscriptionRequest(Request $request, Route $route)
    {
        try {
            $subscription_request = SubscriptionRequest::find($request->id);
            if (!$subscription_request) {
                return redirect()->back()->with('danger', 'Request Not Found');
            } else if ($subscription_request->status == 'rejected') {
                return redirect()->back()->with('danger', 'Request Already Rejected');
            }
            $subscription_request->status = 'rejected';
            $subscription_request->save();
            return redirect()->back()->with('success', 'Request Rejected');
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

    public function deleteSubscriptionRequest(Request $request, Route $route)
    {
        try {
            $subscription_request = SubscriptionRequest::find($request->id);
            if (!$subscription_request) {
                return redirect()->back()->with('danger', 'Request Not Found');
            }
            $subscription_request->delete();
            return redirect()->back()->with('success', 'Request Deleted');
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
