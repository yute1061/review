<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function add()
    {
        return view('admin.post_review.create');
    }
    
    public function create()
    {
        return view('admin.post_review.create');
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
    
    public function index()
    {
        return view('admin.top.index');
    }
}
