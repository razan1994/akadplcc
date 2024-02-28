<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function checkCodeIfExist(Request $request)
    {
        $code = Student::where('own_code', $request->code)->first();
        if (!$code) {
            return response()->json([
                'status' => 'error',
                'message' => 'رمز الإحالة غير صحيح',
            ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'رمز الإحالة فعال',
        ]);
    }
}
