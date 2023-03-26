<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Review;

class UserController extends Controller
{
    //
    public function add()
    {
        $id = Auth::id();
        $posts = User::find($id);
        $review = Review::all()->sortBy('id');
        
        if (empty($posts)) {
            return view('auth.register');
        } else {
            return view('admin.user.mypage', ['posts' => $posts, 'review' => $review]);
        }
    }
}