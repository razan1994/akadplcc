<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;


class AdminDashboardController extends Controller
{
    public function dashboard()
    {

        return view('admin.index');
    }
}
