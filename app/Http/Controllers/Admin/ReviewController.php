<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class ReviewController extends Controller
{
    //
    public function add(Request $request)
    {
        $id = Auth::id();
        $posts = User::find($id);
        return view('admin.post_review.create', ['posts' => $posts]);
    }
    
    public function create()
    {
        return view('admin.post_review.create');
    }
    
    public function preview()
    {
        return view('admin.post_review.preview');
    }
    
    public function edit()
    {
        return view('admin.post_review.edit');
    }
    
    public function update()
    {
        return view('admin.post_review.edit');
    }
    
    public function delete()
    {
        return view('admin.post_review.create');
    }
}