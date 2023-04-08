@extends('layouts.front')

@section('title', 'ユーザー登録')

@section('content')
<div class="wrap">
    <h2 style="text-align: center;">tech boost Bike Product Reviewへようこそ！</h2>
    <p style="text-align: center;">レビューの投稿にはユーザー登録が必要です</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <table class="register_tbl" cellspacing="1">
            <div style="margin-left: 190px; color: red;">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    <ul>
                @endif
            </div>
            <tr>
                <td class="head2011a">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ニックネーム') }}</label>
                </td>
                <td class="head2011b">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
            </tr>

            <tr>
                <td class="head2011a">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
                </td>
                <td class="head2011b">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </td>
            </tr>

            <tr>
                <td class="head2011a">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>
                </td>
                <td class="head2011b">
                    <div class="career">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="8文字以上で入力してください。" required autocomplete="new-password">
                    </div>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('パスワード確認') }}</label>
                </td>
                <td class="head2011b">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="上と同じ内容を入力してください。" required autocomplete="new-password">
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">性別</label>
                </td>
                <td class="head2011b">
                    <label><input type="radio" class="radio" name="gender" value="男性" checked>男性</label>
                    <label><input type="radio" class="radio" name="gender" value="女性">女性</label>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">年齢</label>
                </td>
                <td class="head2011b">
                    <div class="career">
    	                <div class="col-md-2">
            	            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
            	        </div>
            	        <p class="note">歳　　半角数字で入力してください。</p>
            	    </div>
        	    </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">自転車歴</label>
                </td>
                <td class="head2011b">
                    <div class="career">
    	                <div class="col-md-2">
                            <input type="text" class="form-control" name="career" value="{{ old('career') }}">
                        </div>
                        <p class="note">年　　半角数字で入力してください。</p>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">主なライドスタイル</label>
                </td>
                <td class="head2011b">
                    <label><input type="radio" class="radio" name="ridestyle" value="レース" checked>レース</label>
                    <label><input type="radio" class="radio" name="ridestyle" value="ブルベ・ロングライド">ブルベ・ロングライド</label>
                    <label><input type="radio" class="radio" name="ridestyle" value="街乗り">街乗り</label>
                    <label><input type="radio" class="radio" name="ridestyle" value="ポタリング">ポタリング</label>
                    <label><input type="radio" class="radio" name="ridestyle" value="その他">その他</label>
                </td>
            </tr>
        </table>
        <div class="register_btn">
            <input class="btn btn--red btn--cubic" type="submit" value="登録">
        </div>
    </form>
    <div class="register_btn">
        <a class="btn btn--green btn--cubic" href="{{ route('login') }}">
            {{ __('登録済みの方はこちらからログイン') }}
        </a>
    </div>
</div>
@endsection
