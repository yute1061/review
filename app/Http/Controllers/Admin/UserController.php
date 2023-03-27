<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule; // 追加

use App\Models\User;
use App\Models\Review;


class UserController extends Controller
{
    //
    public function edit(Request $request)
    {   
        $id = Auth::id();
        $posts = User::find($id);
        
        if (empty($posts)) {
            abort(404);
        }
        return view('admin.user.edit', ['posts' => $posts]);
    }
    
    public function update(Request $request)
    {   
        $this->validate($request, Validator::$rules);
        $request->validate([
            'email' => ['required', Rule::unique('users')->ignore($request->id, 'id') ] //重複チェック（email変更のとき、他人が登録したアドレスだと弾く）
        ]);
            
        $posts = Auth::user();
        $posts->name = $request->name;
        $posts->email = $request->email;
        $posts->gender = $request->gender;
        $posts->age = $request->age;
        $posts->career = $request->career;
        $posts->ridestyle = $request->ridestyle;
        $posts->save();
        
        return redirect('admin/user/mypage');
    }

    public function mypage(Request $request)
    {   
        $id = Auth::id();
        $posts = User::find($id);
        $review = Review::all()->sortByDesc('created_at');
        
        if (empty($posts)) {
            return view('auth.login');  
        } else {
            return view('admin.user.mypage', ['posts' => $posts, 'review' => $review]);  
        }
    }
}

//$posts = User::all()->sortByDesc('created_at')->first();
//return view('admin.user.mypage', ['posts' => $posts]);