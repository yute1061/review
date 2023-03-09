<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Register;

class UserController extends Controller
{
    //
    public function add()
    {
        return view('auth.register');
    }
    
    public function create(Request $request)
    {   
        //Validationを行う
        $this->validate($request, Register::$rules);
        
        $register = new Register;
        $form = $request->all();
        
        //token削除
        unset($form['_token']);
        
        //データベースに保存
        $register->fill($form);
        $register->save();
        
        return redirect('admin/user/mypage');
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
    
    public function mypage_index(Request $request)
    {  
        $posts = Register::all()->sortByDesc('created_at')->first();
        
        return view('admin.user.mypage', ['posts' => $posts]);
    }      
}
