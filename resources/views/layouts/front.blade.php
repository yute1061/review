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
    		<form style="margin-top: 0px;" action="https://cbnanashi.net/cycle/user.php" method="post">
    		    <input type="text" name="uname" placeholder="ID" size="15" maxlength="35">&nbsp;
    		    <input type="password" name="pass" placeholder="Password" size="15" maxlength="35">
    		    <input type="hidden" name="xoops_redirect" value="/cycle/">
    		    <input type="hidden" name="op" value="login">
    		    <input type="submit" value="LOGIN">
    		</form>
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
    				<li><a href="{{ route('admin.toppage') }}">トップ</a></li>
    				<li><a href="{{ route('admin.post_review.add') }}">レビュー投稿</a></li>
    				<li><a href="{{ route('admin.user.add') }}">ユーザー登録</a></li>
    				<li><a href="{{ route('admin.guideline') }}">投稿ガイドライン</a></li>
    				<li><a href="{{ route('admin.about') }}">当サイトについて</a></li>
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