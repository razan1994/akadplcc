<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\CartOperation;
use App\Models\CartSale;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    // ================================================================
    // ======================== index Function ========================
    // ================================================================
    public function index(Request $request, Route $route)
    {
        try {
            $orders = CartSale::orderBy('created_at', 'desc')->get();
            return view('admin.orders.index', compact('orders'));
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
    // ======================== Show Function =========================
    // ================================================================
    public function show($id, Route $route)
    {
        try {
            $cartSale = CartSale::find($id);
            if ($cartSale) {



                    $request_api = Http::get('https://track.smsaexpress.com/SecomRestWebApi/api/getTracking?awbNo='.$cartSale->refNo.'&passkey=McE@6257');
                    if($request_api->getStatusCode() == 200){

                        $api = json_decode($request_api);
                        // return $api;
                        $tracking = json_decode(json_encode($api->Tracking[0]));

                        $tracking = collect($tracking);
                    }

                    if(isset($tracking)){
                        return view('admin.orders.show', compact('cartSale','tracking'));
                    }
                    else{
                        return view('admin.orders.show', compact('cartSale'));

                    }


                    // return $tracking['awbNo'];

            } else {
                return redirect()->route('super_admin.products-index')->with('danger', 'This record is not in the records');
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
    // ======================== Show Function =========================
    // ================================================================
    public function sendToDelivery($id, Route $route)
    {
        try {
            $cartSale = CartSale::find($id);
            if ($cartSale) {
                if ($cartSale->status == 'Pendding' && $cartSale->payment_status == 'Accepted' && $cartSale->delivery_status == null) {




                    $weight_sum = 0 ;
                    $operations = CartOperation::where('cart_sale_id',$cartSale->id)->get();

                    foreach($operations as $operation){
                        $weight_sum += $operation->product->weight;
                    }


                    $refNo = now()->format('Ymd').$cartSale->id;
                    $sentDate = now('UTC');



                    $api_data = [
                        "passkey"=> "McE@6257",
                        "refno"=> $refNo,
                        "sentDate"=> $sentDate,
                        "idNo"=> "0000000000",
                        "cName"=> $cartSale->customer->username,
                        "cntry"=> $cartSale->location->country,
                        "cCity"=> $cartSale->location->city,
                        "cZip"=> "00000",
                        "prefDelvDate"=> "0000000000000",
                        "cMobile"=> $cartSale->location->phone,
                        "cTel1"=> isset($cartSale->location->phone_extra) ? $cartSale->location->phone_extra : "0000000000",
                        "cTel2"=> $cartSale->customer->phone,
                        "cAddr1"=> $cartSale->location->retail,
                        "cAddr2"=> $cartSale->location->address_2,
                        "shipType"=> "DLV",
                        "PCs"=> $cartSale->cartOperations->count(),
                        "cEmail"=> $cartSale->customer->email,
                        "carrValue"=> "0",
                        "carrCurr"=> "0",
                        "codAmt"=> "0",
                        "weight"=> $weight_sum,
                        "itemDesc"=> "none",
                        "custVal"=> "0",
                        "custCurr"=> "000",
                        "insrAmt"=> "0",
                        "insrCurr"=> "0",
                        "sName"=> "Juman DeadSea",
                        "sContact"=> "Juman DeadSea",
                        "sAddr1"=> "KSA",
                        "sAddr2"=> "KSA",
                        "sCity"=> "Riyadh",
                        "sPhone"=> "+966 66 666 6666",
                        "sCntry"=> "SAudi Arabia",
                        "gpsPoints"=> "0",
                        "cPOBox"=> "00000000",
                        "gpsPoints"=> "0"
                    ];


                    $request_api = Http::post('https://track.smsaexpress.com/SecomRestWebApi/api/addship', $api_data);


                    if($request_api->getStatusCode() != 200){

                        return redirect()->back()->with('danger','An Error Occured ... Please Try Again !!!');

                    }



                    $awbNo = $request_api;


                    // Update Products Quantity :
                    foreach ($cartSale->cartOperations as $key => $cartOperation) {
                        $product = Product::find($cartOperation->product_id);
                        if ($product) {
                            $product->quantity_available = $product->quantity_available - $cartOperation->quantity;
                            $product->save();
                        }
                    }

                    // Update Order Status & Delivery Status :
                    $cartSale->status = 2;  // 2 => Accepted
                    $cartSale->delivery_status = 1;  // 1 => Pendding
                    $cartSale->refNo = str_replace('"','',$awbNo);
                    $cartSale->save();
                    return redirect()->back()->with('success', 'The process has successfully');
                } else {
                    return redirect()->back()->with('danger', 'This order was previously sent to the delivery company');
                }
            } else {
                return redirect()->route('super_admin.products-index')->with('danger', 'This record is not in the records');
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
