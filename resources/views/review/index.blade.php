@extends('layouts.front')

@section('title', 'レビューページ')

@section('content')
    <div class="wrap">
        <br>
        <a>TOP &nbsp; > &nbsp;</a>
        <a>{{ $posts->category }} &nbsp; >　&nbsp;</a>
        <a>{{ $posts->item }} &nbsp; > &nbsp;</a>
        <a>{{ $posts->maker }} &ensp; {{ $posts->product }}</a>
        <br>
        
        <table width="100%" class="outer" cellspacing="1">
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">カテゴリー</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->category }}</p>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">アイテム</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->item }}</p>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">メーカー</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->maker }}</p>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">製品名</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->product }}</p>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">本文</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->body }}</p>
                	</div>
                	<div class="col-md-4">
                	    <div class="caption">
                    	    @if ($posts->image_path1)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path1) }}">
                	        @endif
                	        @if ($posts->image_path2)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path2) }}">
                	        @endif
                	        @if ($posts->image_path3)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path3) }}">
                	        @endif
                	        @if ($posts->image_path4)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path4) }}">
                	        @endif
                	        @if ($posts->image_path5)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path5) }}">
                	        @endif
            	        </div>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">価格評価</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->cost }}</p>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">総合評価</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->evaluation }}</p>
                	</div>
                </td>
            </tr>
        </table>
        @if ($user->email == $posts->contributor)
            <form method="get" action="{{ route('admin.post_review.edit') }}">
                <input type="hidden" name="id" value="{{ $posts->id }}">
                <input type="submit" value="編集">
                @csrf
            </form>
        @else
            <br>
        @endif
    </div>
@endsection