<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Review;

use Carbon\Carbon;

class NavController extends Controller
{
    //
    public function toppage(Request $request)
    {   
        $posts = Review::all()->sortByDesc('id');
        
        return view('toppage.index', ['posts' => $posts]);
    }
    
    public function item(Request $request)
    {   
        $posts = Review::all()->sortBy('maker');
        $item = $request->item;
        
        return view('item.index', ['posts' => $posts, 'item' => $item]);
    }
    
    public function review(Request $request)
    {   
        $user_id = Auth::id();
        if (empty($user_id)) {
            $user = User::find(3); //ダミー情報
        } else {
            $user = User::find($user_id);
        }
        $id = $request->id;
        $posts = Review::find($id);

        return view('review.index', ['posts' => $posts, 'user' => $user]);
    }
    
    public function guideline()
    {   
        return view('guideline.index');
    }
    
    public function about()
    {   
        return view('about.index');
    }
}
