@extends('layouts.front')

@section('title', 'レビューページ')

@section('content')
    <div class="wrap">
        <br>
        <a>{{ $posts->category }}</a>
        <a> > </a>
        <a>{{ $posts->item }}</a>
        <a> > </a>
        <a>{{ $posts->maker }} &ensp; {{ $posts->product }}</a>
        <br>
        
        <table style="margin: 0 auto;" width="80%" class="outer" cellspacing="1">
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
                    <label class="col-md-3">投稿者プロフィール</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-10">
                        <a>{{ $posts->gender }}</a>&nbsp;
                        <a>{{ $posts->age }}歳</a>&nbsp;
                        <a>自転車歴：{{ $posts->career }}年</a>&nbsp;
                        <a>ライドスタイル：{{ $posts->ridestyle }}</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">本文</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-10">
                	    <a>{!! nl2br(e($posts->body)) !!}</a> {{-- 改行を反映させるための表記 --}}
                	</div>
                	<br>
                	<div class="col-md-4">
                	    <div class="caption">
                    	    @if ($posts->image_path1)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path1) }}" class="img-review">
                	        @endif
                	        @if ($posts->image_path2)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path2) }}" class="img-review">
                	        @endif
                	        @if ($posts->image_path3)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path3) }}" class="img-review">
                	        @endif
                	        @if ($posts->image_path4)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path4) }}" class="img-review">
                	        @endif
                	        @if ($posts->image_path5)
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path5) }}" class="img-review">
                	        @endif
            	        </div>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">耐久性</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->durability }}</p>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">使いやすさ</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                	    <p>{{ $posts->usability }}</p>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">コストパフォーマンス</label>
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
        <br>
        @if ($user->email == $posts->contributor)
            <div class="register_btn">
                <form method="get" action="{{ route('admin.post_review.edit') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $posts->id }}">
                    <input class="btn btn--red btn--cubic" type="submit" value="編集">
                </form>
                <br>
                <form method="get" action="{{ route('admin.post_review.delete') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $posts->id }}">
                    <input class="btn btn--gray btn--cubic" type="submit" value="削除">
                </form>
            </div>
        @else
        @endif
    </div>
    <br>
@endsection