{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビューのプレビュー')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="wrap">
        <h2 style="text-align: center;">レビューのプレビュー</h2>
        <form method="POST" enctype="multipart/form-data" action={{ route('admin.post_review.create') }}>
            <table class="review_preview_tbl" cellspacing="1">
                @csrf
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">カテゴリー</label>
                    </td>
                    <td class="head2011b">
                	    <p>{{ $review->category }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">アイテム</label>
                    </td>
                    <td class="head2011b">
                	    <p>{{ $review->item }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">メーカー</label>
                    </td>
                    <td class="head2011b">
                	    <p>{{ $review->maker }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">製品名</label>
                    </td>
                    <td class="head2011b">
                	    <p>{{ $review->product }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">本文</label>
                    </td>
                    <td class="head2011b">
                	    <p>{!! nl2br(e($review->body)) !!}</p> {{-- 改行を反映させるための表記 --}}
                	    <div class="caption">
                    	    @if ($review->image_path1)
                    	        <img src="{{ secure_asset('storage/image/' . $review->image_path1) }}" class="img-review">
                	        @endif
                	        @if ($review->image_path2)
                    	        <img src="{{ secure_asset('storage/image/' . $review->image_path2) }}" class="img-review">
                	        @endif
                	        @if ($review->image_path3)
                    	        <img src="{{ secure_asset('storage/image/' . $review->image_path3) }}" class="img-review">
                	        @endif
                	        @if ($review->image_path4)
                    	        <img src="{{ secure_asset('storage/image/' . $review->image_path4) }}" class="img-review">
                	        @endif
                	        @if ($review->image_path5)
                    	        <img src="{{ secure_asset('storage/image/' . $review->image_path5) }}" class="img-review">
                	        @endif
            	        </div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">耐久性</label>
                    </td>
                    <td class="head2011b">
                	    <p>{{ $review->durability }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">使いやすさ</label>
                    </td>
                    <td class="head2011b">
                	    <p>{{ $review->usability }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">価格評価</label>
                    </td>
                    <td class="head2011b">
                	    <p>{{ $review->cost }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">総合評価</label>
                    </td>
                    <td class="head2011b">
                	    <p>{{ $review->evaluation }}</p>
                    </td>
                </tr>
            </table>
            <div class="register_btn">
        	    <input type="hidden" name="id" value="{{ $review->id }}">
        	    {{-- hidden...隠しファイル これを使うことでidをcreateに送れる --}}
        	    <input class="btn btn--blue btn--cubic" type="submit" value="投稿">
    	    </div>
        </form>
        <div class="register_btn">
            <input class="btn btn--gray btn--cubic" type="submit" onclick="history.back()" value="戻る">
		</div>
    </div>
@endsection