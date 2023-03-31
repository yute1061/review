@extends('layouts.front')

@section('title', 'ログイン')

@section('content')
<div class="wrap">
    <br>
    <h2 style="text-align: center;">tech boost Bike Product Reviewへようこそ！</h2><br>
    <p style="text-align: center;">ユーザー登録がお済みの方はログインして下さい</p><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>  
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('パスワードを記憶する') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="register_btn">
                                <input class="btn btn--red btn--cubic" type="submit" value="ログイン">
                            </div>
                        </form>
                        <br>
                            <div class="register_btn">
                                <a class="btn btn--green btn--cubic" href="{{ route('register') }}">
                                    {{ __('新規登録はこちら') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
