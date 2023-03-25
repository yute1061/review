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
        {{-- post_review.createのためのJavascript --}}
        <script type = "text/javascript">
            <!-- 
            function functionName()
                {
                    var select1 = document.forms.formName.category; //変数1を宣言
                    var select2 = document.forms.formName.item; //変数2を宣言
                    
                    select2.options.length = 0; //選択肢の数がそれぞれに異なる場合、これが重要
                    
                    if (select1.options[select1.selectedIndex].value == "パーツ")
                        {
                            select2.options[0] = new Option("");
                            select2.options[1] = new Option("フレーム・フォーク");
                            select2.options[2] = new Option("ハンドル・ステム");
                            select2.options[3] = new Option("ブレーキレバー・シフトレバー");
                            select2.options[4] = new Option("ブレーキキャリパー");
                            select2.options[5] = new Option("ディレイラー");
                            select2.options[6] = new Option("クランク・チェーンリング");
                            select2.options[7] = new Option("ペダル");
                            select2.options[8] = new Option("ボトムブラケット");
                            select2.options[9] = new Option("サドル・シートポスト");
                            select2.options[10] = new Option("チェーン");
                            select2.options[11] = new Option("カセットスプロケット");
                            select2.options[12] = new Option("ホイール");
                            select2.options[13] = new Option("タイヤ・チューブ");
                            select2.options[14] = new Option("クイックリリース・スキュアー");
                            select2.options[15] = new Option("ワイヤー類");
                            select2.options[16] = new Option("その他小物");
                        }
                        
                    else if (select1.options[select1.selectedIndex].value == "ウェア")
                        {
                            select2.options[0] = new Option("");
                            select2.options[1] = new Option("ヘルメット・キャップ");
                            select2.options[2] = new Option("アイウェア");
                            select2.options[3] = new Option("ジャージ・ジャケット");
                            select2.options[4] = new Option("レッグウェア");
                            select2.options[5] = new Option("インナー");
                            select2.options[6] = new Option("レインウェア・ウィンドブレーカー");
                            select2.options[7] = new Option("グローブ");
                            select2.options[8] = new Option("シューズ");
                            select2.options[9] = new Option("ソックス・シューズカバー");
                            select2.options[10] = new Option("その他");
                        }
                        
                    else if (select1.options[select1.selectedIndex].value == "ギア・バッグ")
                        {
                            select2.options[0] = new Option("");
                            select2.options[1] = new Option("フロントバッグ");
                            select2.options[2] = new Option("サドルバッグ");
                            select2.options[3] = new Option("フレーム・トップチューブバッグ");
                            select2.options[4] = new Option("バックパック・メッセンジャーバッグ");
                            select2.options[5] = new Option("パニアバッグ");
                            select2.options[6] = new Option("サコッシュ");
                            select2.options[7] = new Option("輪行袋・輪行ケース");
                            select2.options[8] = new Option("ホイールバッグ");
                            select2.options[9] = new Option("その他");
                        }
                    
                    else if (select1.options[select1.selectedIndex].value == "工具・その他")
                        {
                            select2.options[0] = new Option("");
                            select2.options[1] = new Option("工具");
                            select2.options[2] = new Option("ケミカル類");
                            select2.options[3] = new Option("ボトル・ボトルケージ");
                            select2.options[4] = new Option("サイコン・GPS");
                            select2.options[5] = new Option("スマートウォッチ");
                            select2.options[6] = new Option("心拍計");
                            select2.options[7] = new Option("ライト");
                            select2.options[8] = new Option("ポンプ");
                            select2.options[9] = new Option("鍵");
                            select2.options[10] = new Option("ローラー台");
                            select2.options[11] = new Option("スタンド");
                            select2.options[12] = new Option("その他");
                        }
                }
        </script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
		<link href="{{ secure_asset('css/reset.css') }}" rel="stylesheet">
		<link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
		<link href="{{ secure_asset('css/user.css') }}" rel="stylesheet">
		<link href="{{ secure_asset('css/review.css') }}" rel="stylesheet">
		
    </head>
    <body id="pagetop" onLoad="functionName()">
        <header>
            <div class="wrap">
                @guest
            		<form style="margin-top: 0px;" action="{{ route('login') }}" method="post">
            		    @csrf
            		    <div class="top_login">
                		    <div class="top_form">
                		        <a>メールアドレス</a>
                		        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus size="15">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="top_form">
                                <a>パスワード</a>
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
        		            <p>ようこそ　</p><p class="name">{{ Auth::user()->name }}</p><p>　さん　</p>
            		            <input type="submit" value="マイページ">
        	            </div>
    	            </form>
    	        @endguest
    	        <div class="logo">
    	            <img src="{{ secure_asset('storage/image/logo.png/') }}">
        			<span class="logo2">
        				<h1>RANDONNEUR</h1>
        			</span>
    				<span class="logo3">
    				    <h4>bike product review</h4>
    				</span>
        		</div>
        		<nav>
        			<ul class="sightmap">
        				<li><a href="{{ route('toppage') }}">トップ</a></li>
        				<li><a href="{{ route('admin.post_review.add') }}">レビュー投稿</a></li>
        				<li><a href="{{ route('user.add') }}">ユーザー登録</a></li>
        				<li><a href="{{ route('guideline') }}">投稿ガイドライン</a></li>
        				<li><a href="{{ route('about') }}">当サイトについて</a></li>
        			</ul>
        		</nav>
        	</div>
	    </header>
        <main>
            {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
            @yield('content')
        </main>
        <footer>
            <div class="wrap">
        		<p>tech boost Bike Product Review は自転車レビューサイトです</p>
        		<p>自転車に関係のある様々な事物についてお気軽にご投稿下さい</p><br><br><br>
        		<p>当サイト内の全ての画像および文章の無断転載を禁じます</p>
    		</div>
	    </footer>
    </body>
</html>