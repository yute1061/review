@extends('layouts.front')

@section('title', 'トップページ')

@section('content')
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
			<a href="{{ route('item', ['item' => 'フレーム・フォーク']) }}">フレーム・フォーク</a><br>
			<a href="{{ route('item', ['item' => 'ハンドル・ステム']) }}">ハンドル・ステム</a><br>
			<a href="{{ route('item', ['item' => 'ブレーキレバー・シフトレバー']) }}">ブレーキレバー・シフトレバー</a><br>
			<a href="{{ route('item', ['item' => 'ブレーキ']) }}">ブレーキ</a><br>
			<a href="{{ route('item', ['item' => 'フロントディレイラー']) }}">フロントディレイラー</a><br>
			<a href="{{ route('item', ['item' => 'リアディレイラー']) }}">リアディレイラー</a>
		</div>
		<div class="center_category_equipment">
			<a href="{{ route('item', ['item' => 'クランク・チェーンリング']) }}">クランク・チェーンリング</a><br>
			<a href="{{ route('item', ['item' => 'ペダル']) }}">ペダル</a><br>
			<a href="{{ route('item', ['item' => 'ボトムブラケット']) }}">ボトムブラケット</a><br>
			<a href="{{ route('item', ['item' => 'サドル']) }}">サドル</a><br>
			<a href="{{ route('item', ['item' => 'シートポスト']) }}">シートポスト</a><br>
			<a href="{{ route('item', ['item' => 'チェーン']) }}">チェーン</a>
		</div>
		<div class="right_category_equipment">
			<p>カセットスプロケット</p>
			<p>ホイール</p>
			<p>タイヤ・チューブ</p>
			<p>クイックリリース・スキュアー</p>
			<p>ワイヤー類</p>
			<p>その他小物</p>
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
				<p>その他</p>
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
				<p>その他</p>
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
@endsection