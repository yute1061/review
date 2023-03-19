<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Review;

class ReviewController extends Controller
{
    //
    public function item(Request $request)
    {   
        $posts = Review::all();
        $item = $request->item;
        
        return view('item.index', ['posts' => $posts, 'item' => $item]);
    }
    
    public function review(Request $request)
    {   
        $id = $request->id;
        $posts = Review::find($id);

        return view('review.index', ['posts' => $posts]);
    }
}
