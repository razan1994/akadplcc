<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\PublicValue;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalHttp\HttpException;

class PaypalController extends Controller
{
    public function create()
    {
        $registeration_amount = (float) PublicValue::where('key', 'registeration_amount')->first()->value;
        if (!$registeration_amount) {
            return redirect()->back()->with('danger', 'قيمة التسجيل غير موجودة');
        }

        // Check if student already paid and registeration date not ended 
        $student = auth('student')->user();
        if (!$student) {
            return redirect()->route('welcome')->with('danger', 'الطالب غير موجود');
        }
        $last_payment = $student->payments()->latest()->first();
        if ($last_payment && $last_payment->payment_status == 'paid' && $last_payment->due_at > Carbon::now()) {
            return redirect()->route('welcome')->with('success', 'الطالب مسجل بالفعل');
        }



        $payment = Payment::create([
            'student_id' => auth('student')->id(),
            'amount' => $registeration_amount,
            'status' => 'pending',
            'payment_method' => 'paypal',
            'payment_status' => 'unpaid',
        ]);

        // --------- get client from service container ---------
        $client = app('PaypalClient');

        // --------- create order request ---------
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => "test_ref_id1",
                "amount" => [
                    "value" => $registeration_amount,
                    "currency_code" => "USD"
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('student.paypal.cancel', $payment->id),
                "return_url" => route('student.paypal.rollback', $payment->id)
            ]
        ];

        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($request);
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            if ($response->statusCode == 201) {
                // --------- save payment ---------
                foreach ($response->result->links as $link) {
                    if ($link->rel == 'approve') {
                        return redirect()->away($link->href);
                    }
                }
            }
        } catch (HttpException $ex) {
            echo "<pre>";
            echo $ex->statusCode;
            echo "<br>";

            echo $ex->getMessage();
            echo "<br>";
            echo "</pre>";
            print_r($ex->getMessage());

            return redirect()->route('welcome')->with('danger', 'عملية الدفع فشلت');
        }
    }



    public function rollback($invoiceId, Request $request)
    {

        $student = auth('student')->user();
        if (!$student) {
            return redirect()->route('welcome')->with('danger', 'الطالب غير موجود');
        }

        $registeration_amount = (float) PublicValue::where('key', 'registeration_amount')->first()->value;
        if (!$registeration_amount) {
            return redirect()->back()->with('danger', 'Registeration amount not found');
        }
        $payment = Payment::find($invoiceId);
        if (!$payment) {
            return redirect()->back()->with('danger', 'الفاتورة غير موجودة');
        }
        // --------- get client from service container ---------
        $client = app('PaypalClient');
        $token = $request->query('token');

        $request = new OrdersCaptureRequest($token);
        $request->prefer('return=representation');
        try {
            // Call API with your client and get a response for your call
            $response = $client->execute($request);

            // If call returns body in response, you can get the deserialized version from the result attribute of the response
            if ($response->statusCode == 201 && $response->result->status == 'COMPLETED') {

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
                // --------- Update Payment Invoice ---------
                $payment->update([
                    'status' => 'accepted',
                    'payment_status' => 'paid',
                    "due_at" => Carbon::now()->addYear(),
                ]);
                return redirect()->route('welcome')->with('success', 'تم الدفع بنجاح');
            }
        } catch (HttpException $ex) {
            $payment->update([
                'status' => 'rejected',
                'payment_status' => 'unpaid',
            ]);
            return redirect()->route('welcome')->with('danger', 'فشلت عملية الدفع');
        }
    }




    public function cancel($invoiceId)
    {
        $registeration_amount = (float) PublicValue::where('key', 'registeration_amount')->first()->value;
        if (!$registeration_amount) {
            return redirect()->back()->with('danger', 'قيمة التسجيل غير موجودة');
        }

        $payment = Payment::find($invoiceId);

        // --------- Update Invoice ---------
        $payment->update([
            'status' => 'rejected',
            'payment_status' => 'unpaid',
        ]);
        return redirect()->route('welcome')->with('danger', 'تم الغاء الدفع');
    }
}
