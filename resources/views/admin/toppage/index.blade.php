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
@endsection