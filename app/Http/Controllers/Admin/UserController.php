<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
class UserController extends Controller
{
    //
    public function add()
    {
        $id = Auth::id();
        $posts = User::find($id);
        
        if (empty($posts)) {
            return view('auth.register');
        } else {
            return view('admin.user.mypage', ['posts' => $posts]);
        }
    }
    
    public function edit(Request $request)
    {   
        $id = Auth::id();
        $posts = User::find($id);
        
        if (empty($posts)) {
            abort(404);
        }
        return view('admin.user.edit', ['user_form' => $posts]);
    }
    
    public function update(Request $request)
    {
        $posts = Auth::user();
        $posts->name = $request->name;
        $posts->email = $request->email;
        $posts->gender = $request->gender;
        $posts->age = $request->age;
        $posts->career = $request->career;
        $posts->ridestyle = $request->ridestyle;
        $posts->save();
        
        return view('admin.user.mypage', ['posts' => $posts]);
    }
    
    public function delete()
    {
        return view('admin.user.create');
    }

    public function mypage(Request $request)
    {   
        $id = Auth::id();
        $posts = User::find($id);
        
        if (empty($posts)) {
            return view('auth.login');  
        } else {
            return view('admin.user.mypage', ['posts' => $posts]);  
        }
    }
}

//$posts = User::all()->sortByDesc('created_at')->first();
//return view('admin.user.mypage', ['posts' => $posts]);