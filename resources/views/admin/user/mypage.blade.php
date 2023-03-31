@extends('layouts.front')

@section('title', 'マイページ')

@section('content')
    <div class="wrap">
        <br>
        <h2 style="text-align: center;">RANDONNEUR bike product reviewへようこそ！</h2><br>
        <p style="text-align: center;">あなたのユーザー情報です</p><br>
        <table style="margin: 0 auto;" width="50%" class="outer" cellspacing="1">
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
        <br>
        <form method="GET" action="{{ route('admin.user.edit') }}">
            @csrf
            <div class="register_btn">
                <input class="btn btn--red btn--cubic" type="submit" value="編集">
            </div>
        </form>
        <br>
        <br>
        <p style="text-align: center;">Myレビュー</p>
        <br>
        <table style="margin: 0 auto;" width="50%" cellspacing="1">
            <?php $count=0; ?>
            @foreach ($review as $my_review)
                @if ($my_review->status == 1)
                    @if ($my_review->contributor == $posts->email)
                        <?php $count++; ?>
                        <tr>
                            <td class="head2011c">
                                <a href="{{ route('review', ['id' => $my_review->id])}}"></a>
                                <span>{{ Str::limit($my_review->item) }}</span>
                            </td>
                            <td class="head2011c">
                                <a href="{{ route('review', ['id' => $my_review->id])}}"></a>
                                <span>{{ Str::limit($my_review->product) }}</span>
                            </td>
                            <td class="head2011c">
                                <a href="{{ route('review', ['id' => $my_review->id])}}"></a>
                                <span>{{ Str::limit($my_review->created_at) }}</span>
                            </td>
                        </tr>
                    @endif
                @endif
            @endforeach
        </table>
        @if ($count == 0)
            <p style="text-align: center;">投稿レビューがありません</p>
        @endif
        <br>
        <br>
        <form style="text-align: center;" method="POST" action="{{ route('logout') }}">
            @csrf
            <input class="btn btn--gray btn--cubic" type="submit" value="ログアウト">
        </form>
        <br>
    </div>  
@endsection