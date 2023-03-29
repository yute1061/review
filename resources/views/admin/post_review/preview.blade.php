{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビューのプレビュー')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="wrap">
        <br>
        <h2 style="text-align: center;">レビューのプレビュー</h2>
        <br>
        <form method="POST" enctype="multipart/form-data" action={{ route('admin.post_review.create') }}>
            <table style="margin: 0 auto;" width="80%" class="outer" cellspacing="1">
                @csrf
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">カテゴリー</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <p>{{ $review->category }}</p>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">アイテム</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-7">
                    	    <p>{{ $review->item }}</p>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">メーカー</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <p>{{ $review->maker }}</p>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">製品名</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <p>{{ $review->product }}</p>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">本文</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-10">
                    	    <a>{!! nl2br(e($review->body)) !!}</a> {{-- 改行を反映させるための表記 --}}
                    	</div>
                    	<div class="col-md-4">
                    	    <div class="caption">
                        	    @if ($review->image_path1)
                        	        <img src="{{ secure_asset('storage/image/' . $review->image_path1) }}">
                    	        @endif
                    	        @if ($review->image_path2)
                        	        <img src="{{ secure_asset('storage/image/' . $review->image_path2) }}">
                    	        @endif
                    	        @if ($review->image_path3)
                        	        <img src="{{ secure_asset('storage/image/' . $review->image_path3) }}">
                    	        @endif
                    	        @if ($review->image_path4)
                        	        <img src="{{ secure_asset('storage/image/' . $review->image_path4) }}">
                    	        @endif
                    	        @if ($review->image_path5)
                        	        <img src="{{ secure_asset('storage/image/' . $review->image_path5) }}">
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
                    	    <p>{{ $review->cost }}</p>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">総合評価</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <p>{{ $review->evaluation }}</p>
                    	</div>
                    </td>
                </tr>
            </table>
            <br>
            <div class="register_btn">
        	    <input type="hidden" name="id" value="{{ $review->id }}">
        	    {{-- hidden...隠しファイル これを使うことでidをcreateに送れる --}}
        	    <input class="btn btn--blue btn--cubic" type="submit" value="投稿">
    	    </div>
        </form>
        <br>
        <div class="register_btn">
            <input class="btn btn--gray btn--cubic" type="submit" onclick="history.back()" value="戻る">
		</div>
    </div>
    <br>
@endsection