<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class NavController extends Controller
{
    //
    public function toppage(Request $request)
    {   
        return view('toppage.index');
    }
    
    public function guideline()
    {   
        return view('guideline.index');
    }
    
    public function about()
    {   
        return view('about.index');
    }
}
