@extends('layouts.toppage')

@section('title', 'トップページ')

@section('content')
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
				<h1>tb Bike Product Review</h1>
			</div>
			<div class="banner">
				<a href="#">banner</a>
			</div>
		</div>
		<nav>
			<ul class="sightmap">
				<li><a href="https://182c8b6222ca465281331fac053be27d.vfs.cloud9.us-east-1.amazonaws.com/admin/toppage#">トップ</a></li>
				<li><a href="https://182c8b6222ca465281331fac053be27d.vfs.cloud9.us-east-1.amazonaws.com/admin/post_review/create#">レビュー投稿</a></li>
				<li><a href="https://182c8b6222ca465281331fac053be27d.vfs.cloud9.us-east-1.amazonaws.com/admin/user/create#">ユーザー登録</a></li>
				<li><a href="https://182c8b6222ca465281331fac053be27d.vfs.cloud9.us-east-1.amazonaws.com/admin/guideline#">投稿ガイドライン</a></li>
				<li><a href="https://182c8b6222ca465281331fac053be27d.vfs.cloud9.us-east-1.amazonaws.com/admin/about#">当サイトについて</a></li>
			</ul>
		</nav>
	</header>
	<div class="wrap new_review">
		<div class="new_review_frame">
			<div class="title">
				<h3>新着レビュー</h3>
				<p>新着20件のレビューを表示します</p>
			</div>
			<div class="wrap">
				<div class="left_new_review">
					<p>新着10件のレビューを表示します</p>
					<p>新着10件のレビューを表示します</p>
					<p>新着10件のレビューを表示します</p>
					<p>新着10件のレビューを表示します</p>
					<p>新着10件のレビューを表示します</p>
				</div>
				<div class="right_new_review">
					<p>新着10件のレビューを表示します</p>
					<p>新着10件のレビューを表示します</p>
					<p>新着10件のレビューを表示します</p>
					<p>新着10件のレビューを表示します</p>
					<p>新着10件のレビューを表示します</p>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap">
		<div class="banner2">
			<a href="#">banner</a>
		</div>
	</div>
	<div class="wrap category_equipment">
		<div class="title">
			<h3>パーツ</h3>
		</div>
		<div class="left_category_equipment">
			<p>フレーム・フォーク</p>
			<p>ハンドル・ステム</p>
			<p>ブレーキレバー・シフトレバー</p>
			<p>ブレーキ</p>
			<p>フロントディレイラー</p>
			<p>リアディレイラー</p>
		</div>
		<div class="center_category_equipment">
			<p>クランク・チェーンリング</p>
			<p>ペダル</p>
			<p>ボトムブラケット</p>
			<p>サドル</p>
			<p>シートポスト</p>
			<p>パワーメーター</p>
		</div>
		<div class="right_category_equipment">
			<p>チェーン</p>
			<p>カセットスプロケット</p>
			<p>ホイール</p>
			<p>タイヤ・チューブ</p>
			<p>クイックリリース・スキュアー</p>
			<p>ワイヤー類</p>
		</div>
	</div>
	<div class="wrap category_not_equipment">
		<div class="category_wear">
			<div class="title">
				<h3>ウェア</h3>
			</div>
			<div style="margin-left: 10px;">
				<p>ヘルメット・キャップ</p>
				<p>アイウェア</p>
				<p>ジャージ・ジャケット</p>
				<p>レッグウェア</p>
				<p>インナー</p>
				<p>レインウェア・ウィンドブレーカー</p>
				<p>グローブ</p>
				<p>シューズ</p>
				<p>ソックス・シューズカバー</p>
			</div>
		</div>
		<div class="category_gear">
			<div class="title">
				<h3>ギア・バッグ</h3>
			</div>
			<div style="margin-left: 10px;">
				<p>フロントバッグ</p>
				<p>サドルバッグ</p>
				<p>トップチューブバッグ</p>
				<p>フレームバッグ</p>
				<p>バックパック</p>
				<p>サコッシュ</p>
				<p>輪行袋</p>
				<p>ホイールバッグ</p>
			</div>
		</div>
		<div class="category_tool">
			<div class="title">
				<h3>工具・その他</h3>
			</div>
			<div class="left_category_tool">	
				<p>工具</p>
				<p>ケミカル類</p>
				<p>ボトル・ボトルケージ</p>
				<p>サイコン・GPS</p>
				<p>スマートウォッチ</p>
				<p>心拍計</p>
			</div>
			<div class="right_category_tool">
				<p>ライト</p>
				<p>ポンプ</p>
				<p>鍵</p>
				<p>ローラー台</p>
				<p>スタンド</p>
				<p>その他</p>
			</div>
		</div>
	</div>
	<footer class="wrap">
		<p>tech boost Bike Product Review は自転車レビューサイトです</p>
		<p>自転車に関係のある様々な事物についてお気軽にご投稿下さい</p><br><br><br>
		<p>当サイト内の全ての画像および文章の無断転載を禁じます</p>
	</footer>
@endsection