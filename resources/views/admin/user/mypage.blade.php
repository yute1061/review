@extends('layouts.front')

@section('title', 'マイページ')

@section('content')
    <div class="wrap">
        <br>
        <h2 style="text-align: center;">RANDONNEUR bike product reviewへようこそ！</h2><br>
        <p style="text-align: center;">あなたのユーザー情報です</p><br>
        <table width="100%" class="outer" cellspacing="1">
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">{{ __('ニックネーム') }}</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                    	<p class="name">{{ Str::limit($posts->name, 100) }}</p>
                	</div>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label class="col-md-3">{{ __('メールアドレス') }}</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-4">
                    	<p class="email">{{ Str::limit($posts->email, 100) }}</p>
                	</div>
                </td>
            </tr>
            <tr>
            	<td class="head2011a">
                	<label class="col-md-3">{{ __('性別') }}</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-4">
                    	<p class="gender">{{ Str::limit($posts->gender, 100) }}</p>
                    </div>
                </td>
           	</tr>
            <tr>
            	<td class="head2011a">
                	<label class="col-md-3">{{ __('年齢') }}</label>
                </td>
                <td class="head2011b">
                	<div class="age">
                    	<div class="col-md-1">
                    	    <p class="age">{{ Str::limit($posts->age, 100) }}</p>
                    	</div>
                    	<p>歳</p>
                    </div>
                </td>
          	</tr>
            <tr>
            	<td class="head2011a">
                	<label class="col-md-3">{{ __('自転車歴') }}</label>
                </td>
                <td class="head2011b">
                    <div class="career">
                        <div class="col-md-1">
                        	<p class="career">{{ Str::limit($posts->career, 100) }}</p>
                        </div>
                        <p>年</p>
                    </div>
                </td>
          	</tr>
            <tr>
            	<td class="head2011a">
                	<label class="col-md-3">{{ __('主なライドスタイル') }}</label>
                </td>
                <td class="head2011b">
                	<div class="col-md-10">
                    	<p class="ridestyle">{{ Str::limit($posts->ridestyle, 100) }}</p>
                    </div>
                </td>
            </tr>
        </table>
        <form method="GET" action="{{ route('admin.user.edit') }}">
            <input type="submit" value="編集">
            @csrf
        </form>
        <br>
        <p>Myレビュー</p>
        <table width="60%" class="outer" cellspacing="1">
            <?php $count=0; ?>
            @foreach ($review as $my_review)
                @if ($my_review->status == 1)
                    @if ($my_review->contributor == $posts->email)
                        <?php $count++; ?>
                        <tr>
                            <td class="head2011c">
                                <div class="col-md-3">
                                    <a href="{{ route('review', ['id' => $my_review->id])}}">{{ Str::limit($my_review->maker) }}</a>
                                </div>
                            </td>
                            <td class="head2011c">
                                <div class="col-md-10">
                                    <a href="{{ route('review', ['id' => $my_review->id])}}">{{ Str::limit($my_review->product) }}</a>
                                </div>
                            <td class="head2011c">
                                <div class="col-md-10">
                                    <a href="{{ route('review', ['id' => $my_review->id])}}">{{ Str::limit($my_review->created_at) }}</a>
                                </div>
                            </td>
                        </tr>
                        
                    @endif
                @endif
            @endforeach
        </table>
        @if ($count == 0)
            <a>投稿レビューがありません</a>
        @endif
        <br>
        <br>
        <form method="POST" action="{{ route('logout') }}">
            <input type="submit" value="ログアウト">
            @csrf
        </form>
        <br>
    </div>  
@endsection