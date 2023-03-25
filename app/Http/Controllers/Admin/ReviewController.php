<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Review;
use App\Models\ReviewPage;

class ReviewController extends Controller
{
    //
    public function add(Request $request)
    {
        $user = Auth::user();
        if (empty($user)) {
            return view('auth.login');
        } else {
            return view('admin.post_review.add');
        }
    }

    public function preview(Request $request)
    {
        $this->validate($request, Review::$rules);
        
        $review = new Review();
        $form = $request->all();
        
        // フォームから画像が送信されてきたら、保存して、$review->image_path に画像のパスを保存する
        if (isset($form['image1'])) {
            $path = $request->file('image1')->store('public/image');
            $review->image_path1 = basename($path);
        } else {
            $review->image_path1 = null;
        }
        
        if (isset($form['image2'])) {
            $path = $request->file('image2')->store('public/image');
            $review->image_path2 = basename($path);
        } else {
            $review->image_path2 = null;
        }
        
        if (isset($form['image3'])) {
            $path = $request->file('image3')->store('public/image');
            $review->image_path3 = basename($path);
        } else {
            $review->image_path3 = null;
        }
        
        if (isset($form['image4'])) {
            $path = $request->file('image4')->store('public/image');
            $review->image_path4 = basename($path);
        } else {
            $review->image_path4 = null;
        }
        
        if (isset($form['image5'])) {
            $path = $request->file('image5')->store('public/image');
            $review->image_path5 = basename($path);
        } else {
            $review->image_path5 = null;
        }

        unset($form['_token']);
        unset($form['image1']);
        unset($form['image2']);
        unset($form['image3']);
        unset($form['image4']);
        unset($form['image5']);
        
        $review->fill($form);
        $review->save();
        
        return view('admin.post_review.preview', ['review' => $review]);
    }
    
    public function create(Request $request)
    {   
        $user = Auth::user();
        $review = Review::find($request->id);

        $review->status = 1;
        $review->contributor = $user->email;
        $review->save();
        
        return redirect('/');
    }
    
    public function edit(Request $request)
    {
        $posts = Review::find($request->id);
        if (empty($posts)) {
            abort(404);
        }
        return view('admin.post_review.edit', ['posts' => $posts]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Review::$rules);
        
        $review = Review::find($request->id);
        $form = $request->all();
        
        if ($request->remove1 == 'true') { //”画像を削除”に✔が入っている
            $form['image_path1'] = null;
        } elseif (isset($form['image1'])) { //別の新しい画像が選択されている
            $path = $request->file('image1')->store('public/image');
            $review->image_path1 = basename($path); 
        } elseif (isset($review['image_path1'])) { //元々の画像が変更されていない
            $form['image_path1'] = $review->image_path1;
        } else {
        }
        
        if ($request->remove2 == 'true') { //”画像を削除”に✔が入っている
            $form['image_path2'] = null;
        } elseif (isset($form['image2'])) { //別の新しい画像が選択されている
            $path = $request->file('image2')->store('public/image');
            $review->image_path2 = basename($path); 
        } elseif (isset($review['image_path2'])) { //元々の画像が変更されていない
            $form['image_path2'] = $review->image_path2;
        } else {
        }
        
        if ($request->remove3 == 'true') { //”画像を削除”に✔が入っている
            $form['image_path3'] = null;
        } elseif (isset($form['image3'])) { //別の新しい画像が選択されている
            $path = $request->file('image3')->store('public/image');
            $review->image_path3 = basename($path); 
        } elseif (isset($review['image_path3'])) { //元々の画像が変更されていない
            $form['image_path3'] = $review->image_path3;
        } else {
        }
        
        if ($request->remove4 == 'true') { //”画像を削除”に✔が入っている
            $form['image_path4'] = null;
        } elseif (isset($form['image4'])) { //別の新しい画像が選択されている
            $path = $request->file('image4')->store('public/image');
            $review->image_path4 = basename($path); 
        } elseif (isset($review['image_path4'])) { //元々の画像が変更されていない
            $form['image_path4'] = $review->image_path4;
        } else {
        }
        
        if ($request->remove5 == 'true') { //”画像を削除”に✔が入っている
            $form['image_path5'] = null;
        } elseif (isset($form['image5'])) { //別の新しい画像が選択されている
            $path = $request->file('image5')->store('public/image');
            $review->image_path5 = basename($path); 
        } elseif (isset($review['image_path5'])) { //元々の画像が変更されていない
            $form['image_path5'] = $review->image_path5;
        } else {
        }
        
        unset($form['remove']);
        unset($form['_token']);
        unset($form['image1']);
        unset($form['image2']);
        unset($form['image3']);
        unset($form['image4']);
        unset($form['image5']);
        
        $review->fill($form);
        $review->save();
        
        return redirect('/');
    }
    
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $review = Review::find($request->id);
        
        // 削除する
        $review->delete();
        
        return redirect('/');
    }

    public function index()
    {
        return view('admin.post_review.create');
    }
}

