<?php

namespace App\Http\Controllers\Backend\Admin\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    function getSubCategories(Request $request)
    {
        $request->validate([
            'main_category_id' => 'required',
        ]);

        $mainCategory = Category::where('id', $request->main_category_id)->first();
        if ($mainCategory && $mainCategory->childrens->count() > 0) {
            return response()->json(['status' => true, 'subCategories' => $mainCategory->childrens]);
        } else {

            return response()->json(['status' => false, 'subCategories' => []]);
        }
    }
}
