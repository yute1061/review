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
        $id = Auth::id();
        $posts = User::find($id);
        return view('toppage.index', ['posts' => $posts]);
    }
    
    public function guideline()
    {   
        $id = Auth::id();
        $posts = User::find($id);
        return view('guideline.index', ['posts' => $posts]);
    }
    
    public function about()
    {   
        $id = Auth::id();
        $posts = User::find($id);
        return view('about.index', ['posts' => $posts]);
    }
}
