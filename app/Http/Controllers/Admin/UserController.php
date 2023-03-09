<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //
    public function add()
    {
        return view('auth.register');
    }
    
    public function edit()
    {
        return view('admin.user.edit');
    }
    
    public function update()
    {
        return view('admin.user.edit');
    }
    
    public function delete()
    {
        return view('admin.user.create');
    }
    
    public function mypage(Request $request)
    {  
        $posts = User::first();
        
        return view('admin.user.mypage', ['posts' => $posts]);
    }      
}
