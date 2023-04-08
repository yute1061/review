@extends('layouts.front')

@section('title', 'マイページ')

@section('content')
    <div class="wrap">
        <h2 style="text-align: center;">RANDONNEUR bike product reviewへようこそ！</h2>
        <p style="text-align: center;">あなたのユーザー情報です</p>
        <table class="mypage_tbl" cellspacing="1">
            <tr>
                <td class="head2011a">
                	<label>{{ __('ニックネーム') }}</label>
                </td>
                <td class="head2011b">
                	<a>{{ Str::limit($posts->name, 100) }}</a>
                </td>
            </tr>
            <tr>
                <td class="head2011a">
                	<label>{{ __('メールアドレス') }}</label>
                </td>
                <td class="head2011b">
                	<a>{{ Str::limit($posts->email, 100) }}</a>
                </td>
            </tr>
            <tr>
            	<td class="head2011a">
                	<label>{{ __('性別') }}</label>
                </td>
                <td class="head2011b">
                	<a>{{ Str::limit($posts->gender, 100) }}</a>
                </td>
           	</tr>
            <tr>
            	<td class="head2011a">
                	<label>{{ __('年齢') }}</label>
                </td>
                <td class="head2011b">
            	    <a>{{ Str::limit($posts->age, 100) }} 歳</a>
                </td>
          	</tr>
            <tr>
            	<td class="head2011a">
                	<label>{{ __('自転車歴') }}</label>
                </td>
                <td class="head2011b">
                	<a>{{ Str::limit($posts->career, 100) }} 年</a>
                </td>
          	</tr>
            <tr>
            	<td class="head2011a">
                	<label>{{ __('主なライドスタイル') }}</label>
                </td>
                <td class="head2011b">
                	<a>{{ Str::limit($posts->ridestyle, 100) }}</a>
                </td>
            </tr>
        </table>
        <form method="GET" action="{{ route('admin.user.edit') }}">
            @csrf
            <div class="register_btn">
                <input class="btn btn--red btn--cubic" type="submit" value="編集">
            </div>
        </form>
        <h3 style="text-align: center; margin: 40px 0 20px 0;">My レビュー</h3>
            <?php $count=0; ?>
            @foreach ($review as $my_review)
                @if ($my_review->status == 1)
                    @if ($my_review->contributor == $posts->email)
                        <?php $count++; ?>
                        <div class="myreview">
                            <a href="{{ route('review', ['id' => $my_review->id])}}">
                                <div class="myreview_link">
                                    <div class="myreview_item">
                                        <p class="overflow_myreview">{{ Str::limit($my_review->item) }}</p>
                                    </div>
                                    <div class="myreview_item">
                                        <p class="overflow_myreview">{{ Str::limit($my_review->product) }}</p>
                                    </div>
                                    <div class="myreview_item">
                                        <p class="overflow_myreview">{{ Str::limit($my_review->created_at) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endif
            @endforeach
        </table>
        @if ($count == 0)
            <p style="text-align: center;">投稿レビューがありません</p>
        @endif
        <form style="text-align: center;" method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="register_btn">
                <input class="btn btn--gray btn--cubic" type="submit" value="ログアウト">
            </div>
        </form>
    </div>  
@endsection