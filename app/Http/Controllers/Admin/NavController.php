<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavController extends Controller
{
    //
    public function toppage()
    {
        return view('admin.toppage.index');
    }
    
    public function guideline()
    {
        return view('admin.guideline.index');
    }
    
    public function about()
    {
        return view('admin.about.index');
    }
}
