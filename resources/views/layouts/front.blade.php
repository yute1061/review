<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
       
        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます --}}
        <title>@yield('title')</title>
        
        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
		<link href="{{ secure_asset('css/reset.css') }}" rel="stylesheet">
		<link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
		<link href="{{ secure_asset('css/user.css') }}" rel="stylesheet">
		
    </head>
    <body id="pagetop">
        <header class="wrap">
            @guest
        		<form style="margin-top: 0px;" action="{{ route('login') }}" method="post">
        		    @csrf
        		    <div class="top_login">
            		    <div class="top_form">
            		        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus size="15">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="top_form">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="top_form_btn">
        		            <input type="submit" value="ログイン">
        		        </div>
        		    </div>
    		    </form>
		    @else
		        <form action="{{ route('admin.user.index') }}" method="get">
    		        <div class="top_login">
    		            <p>ようこそ　</p><p class="name">{{ Str::limit($posts->name, 100) }}</p><p>　さん　</p>
        		            <input type="submit" value="マイページ">
    	            </div>
	            </form>
	        @endguest
    		<div class="logo_wrap">
    			<div class="logo">
    				<h4>tb Bike Product Review</h4>
    			</div>
    			<div class="banner">
    				<a href="#">banner</a>
    			</div>
    		</div>
    		<nav>
    			<ul class="sightmap">
    				<li><a href="{{ route('toppage') }}">トップ</a></li>
    				<li><a href="{{ route('admin.post_review.add') }}">レビュー投稿</a></li>
    				<li><a href="{{ route('admin.user.add') }}">ユーザー登録</a></li>
    				<li><a href="{{ route('guideline') }}">投稿ガイドライン</a></li>
    				<li><a href="{{ route('about') }}">当サイトについて</a></li>
    			</ul>
    		</nav>
	    </header>
        <main>
            {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
            @yield('content')
        </main>
        <footer class="wrap">
    		<p>tech boost Bike Product Review は自転車レビューサイトです</p>
    		<p>自転車に関係のある様々な事物についてお気軽にご投稿下さい</p><br><br><br>
    		<p>当サイト内の全ての画像および文章の無断転載を禁じます</p>
	    </footer>
    </body>
</html>