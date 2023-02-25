<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function add()
    {
        return view('post_review.create');
    }
    
    public function create()
    {
        return view('post_review.create');
    }
    
    public function edit()
    {
        return view('post_review.edit');
    }
    
    public function update()
    {
        return view('post_review.edit');
    }
    
    public function delete()
    {
        return view('post_review.create');
    }
    
    public function index()
    {
        return view('top.index');
    }
}

