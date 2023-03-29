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
        $delete = Review::all()->sortBy('status')->first(); //トップページを開くたびにstatusが1じゃない＝保存だけされて表示されていないデータを削除する
        
        if (!empty($delete)) {
            if ($delete->status != 1) {
                $delete->delete();
        }
        }
        
        return view('toppage.index', ['posts' => $posts]);
    }
    
    public function item(Request $request)
    {   
        $posts = Review::all()->sortBy('maker');
        $category = $request->category;
        $item = $request->item;
        
        return view('item.index', ['posts' => $posts, 'category' => $category, 'item' => $item]);
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
