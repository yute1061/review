{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビューの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="wrap">
        <br>
        <h2 style="text-align: center;">レビュー新規作成</h2>
        <br>
        <table width="100%" class="outer" cellspacing="1">
            <form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
            {{-- <form action="{{ route('admin.post_review.preview') }}" method="post" enctype="multipart/form-data">--}}
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">カテゴリー</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="category">
                    	        <option>パーツ</option>
                                <option>ウェア</option>
                                <option>ギア・バッグ</option>
                                <option>工具・その他</option>
                            </select>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">アイテム</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="item">
                    	        <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">メーカー</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="item">
                    	        <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">製品名</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-6">
                        	<input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">レビュー本文</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-6">
                    	    <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                    	    <input type="file" class="form-control-file" name="image1">
                    	    <input type="file" class="form-control-file" name="image2">
                    	    <input type="file" class="form-control-file" name="image3">
                    	    <input type="file" class="form-control-file" name="image4">
                    	    <input type="file" class="form-control-file" name="image5">
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">価格評価</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="cost">
                    	        <option>★</option>
                                <option>★★</option>
                                <option>★★★</option>
                                <option>★★★★</option>
                    	        <option>★★★★★</option>
                            </select>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">総合評価</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="cost">
                    	        <option>★</option>
                                <option>★★</option>
                                <option>★★★</option>
                                <option>★★★★</option>
                    	        <option>★★★★★</option>
                            </select>
                    	</div>
                    </td>
                </tr>
                <tr>
                	<td>
                		<input type="submit" value="プレビュー">
                	</td>
                </tr>
            </form>
        </table>
    </div>
@endsection
