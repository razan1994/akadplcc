<?php

namespace App\Http\Controllers\Backend\Admin;

use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use App\Models\PaymentWalletOrders;
use App\Models\Student;
use App\Models\SupportTicket;
use Illuminate\Http\Request;

class RequestesdWithdrawalsController extends Controller
{
    public function index(Request $request, Route $route, $type = 'wallet',  $status = 'pending')
    {
        if (!in_array($status, ['paid', 'pending', 'rejected'])) {
            return redirect()->back()->with('danger', 'Invalid status');
        }
        try {
            $requests = PaymentWalletOrders::where('status', $status)
                ->where('type', $type)
                ->get();
            return view('admin.payment_wallet_orders.index', compact('requests', 'status', 'type'));
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

    public function rejectWithdrawalRequest(Request $request, Route $route, $id)
    {
        try {
            $request = PaymentWalletOrders::find($id);
            if (!$request) {
                return redirect()->back()->with('danger', 'Invalid request');
            }
            $request->status = 'rejected';
            $request->save();
            return redirect()->back()->with('success', 'Withdrawal request rejected successfully');
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

    public function approveWithdrawalRequest(Request $request, Route $route, $id)
    {
        try {
            $wallet_order = PaymentWalletOrders::find($id);
            if (!$wallet_order) {
                return redirect()->back()->with('danger', 'Invalid request');
            }

            // check if the student has enough points
            if ($wallet_order->student->points < $wallet_order->amount) {
                $wallet_order->update(['status' => 'rejected']);
                return redirect()->back()->with('danger', 'Insufficient points, withdrawal request rejected.');
            }

            // change status to paid
            $wallet_order->update(['status' => 'paid']);

            // deduct the amount from the student points
            $wallet_order->student->points -= $wallet_order->amount;
            $wallet_order->student->save();

            return redirect()->back()->with('success', 'Withdrawal request approved successfully');
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

    public function deleteWithdrawalRequest(Request $request, Route $route, $id)
    {
        try {
            $wallet_order = PaymentWalletOrders::find($id);
            if (!$wallet_order) {
                return redirect()->back()->with('danger', 'Invalid request');
            }
            $wallet_order->delete();
            return redirect()->back()->with('success', 'Withdrawal request deleted successfully');
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
