<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProdSzeClrRelation;
use App\Models\Product;
use App\Traits\UploadImageTrait;
use App\Traits\SharedMethod;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    use UploadImageTrait;
    use SharedMethod;

    function showCart(){
        return view('front_end_inners.cart');
    }


    function getItemDetails(Request $request){

        $request->validate([
            'item_id'=>'required|numeric'
        ]);

        $item_id = $request->item_id;
        $product = Product::find($item_id);
        $size_colors = ProdSzeClrRelation::where('product_id',$item_id)->get();

        if($product){
            return response()->json(['status'=>true,'product'=>$product]);
        }else{

        }

    }

}
