<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.index2');
    }
    public function manage_food()
    {
        return view('admin.manage_food');
    }

    public function manage_drink()
    {
        return view('admin.manage_drink');
    }

    public function top()
    {
        return view('admin.pages.layout.top-nav');
    }
    //
}
