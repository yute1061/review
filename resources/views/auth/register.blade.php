@extends('layouts.front')

@section('title', 'ユーザー登録')

@section('content')
<div class="wrap">
    <br>
    <h2 style="text-align: center;">tech boost Bike Product Reviewへようこそ！</h2><br>
    <p style="text-align: center;">レビュー投稿の前に以下からユーザー登録を行ってください</p><br>
    <table width="100%" class="outer" cellspacing="1">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <tr>
                <td class="head2011a">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ユーザー名') }}</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-4">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
            </tr>

            <tr>
                <td class="head2011a">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
            </tr>

            <tr>
                <td class="head2011a">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-4">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('パスワード確認') }}</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-4">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">性別</label>
                </td>
                <td class="head2011b">
                    <label><input type="radio" class="radio" name="gender" value="男">男性</label>
                    <label><input type="radio" class="radio" name="gender" value="女">女性</label>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">年齢</label>
                </td>
                <td class="head2011b">
                    <div class="career">
    	                <div class="col-md-1">
            	            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
            	        </div>
            	        <p>歳</p>
            	    </div>
        	    </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">自転車歴</label>
                </td>
                <td class="head2011b">
                    <div class="career">
    	                <div class="col-md-1">
                            <input type="text" class="form-control" name="career" value="{{ old('career') }}">
                        </div>
                        <p>年</p>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">主なライドスタイル</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-10">
                        <label><input type="radio" class="radio" name="ridestyle" value="レース">レース</label>
                        <label><input type="radio" class="radio" name="ridestyle" value="ブルベ・ロングライド">ブルベ・ロングライド</label>
                        <label><input type="radio" class="radio" name="ridestyle" value="街乗り">街乗り</label>
                        <label><input type="radio" class="radio" name="ridestyle" value="ポタリング">ポタリング</label>
                        <label><input type="radio" class="radio" name="ridestyle" value="その他">その他</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">
                        {{ __('登録') }}
                    </button>
                </td>
            </tr>
        </form>
    </table>
</div>
@endsection
