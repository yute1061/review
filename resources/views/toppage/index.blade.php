@extends('layouts.front')

@section('title', 'トップページ')

@section('content')
	<div class="wrap top">
		<div class="left_column">
			<div class="category_index">
				<div class="category">
					<div class="title">
						<img src="{{ secure_asset('storage/image/icon_parts.png/') }}">
						<div class="title2">
							<h3>Parts Category</h3>
						</div>
					</div>
					<div class="item">
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'フレーム・フォーク']) }}">フレーム・フォーク</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'ハンドル・ステム']) }}">ハンドル・ステム</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'ブレーキレバー・シフトレバー']) }}">ブレーキレバー・シフトレバー</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'ブレーキキャリパー']) }}">ブレーキキャリパー</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'ディレイラー']) }}">ディレイラー</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'クランク・チェーンリング']) }}">クランク・チェーンリング</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'ペダル']) }}">ペダル</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'ボトムブラケット']) }}">ボトムブラケット</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'サドル・シートポスト']) }}">サドル・シートポスト</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'チェーン']) }}">チェーン</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'カセットスプロケット']) }}">カセットスプロケット</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'ホイール']) }}">ホイール</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'タイヤ・チューブ']) }}">タイヤ・チューブ</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'クイックリリース・スキュアー']) }}">クイックリリース・スキュアー</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'ワイヤー類']) }}">ワイヤー類</a><br>
						<a href="{{ route('item', ['category' => 'パーツ', 'item' => 'その他小物']) }}">その他小物</a><br>
					</div>
				</div>
				<div class="category">
					<div class="title">
						<img src="{{ secure_asset('storage/image/icon_wear.png/') }}">
						<div class="title2">
							<h3>Wear Category</h3>
						</div>
					</div>
					<div class="item">
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'ヘルメット・キャップ']) }}">ヘルメット・キャップ</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'アイウェア']) }}">アイウェア</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'ジャージ・ジャケット']) }}">ジャージ・ジャケット</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'レッグウェア']) }}">レッグウェア</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'インナー']) }}">インナー</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'レインウェア・ウィンドブレーカー']) }}">レインウェア・ウィンドブレーカー</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'グローブ']) }}">グローブ</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'シューズ']) }}">シューズ</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'ソックス・シューズカバー']) }}">ソックス・シューズカバー</a><br>
						<a href="{{ route('item', ['category' => 'ウェア', 'item' => 'その他']) }}">その他</a><br>
					</div>
				</div>
				<div class="category">
					<div class="title">
						<img src="{{ secure_asset('storage/image/icon_gear.png/') }}">
						<div class="title2">
							<h3>Gear・Bag Category</h3>
						</div>
					</div>
					<div class="item">
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => 'サドルバッグ']) }}">サドルバッグ</a><br>
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => 'フロントバッグ']) }}">フロントバッグ</a><br>
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => 'フレーム・トップチューブバッグ']) }}">フレーム・トップチューブバッグ</a><br>
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => 'バックパック・メッセンジャーバッグ']) }}"></a>バックパック・メッセンジャーバッグ<br>
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => 'パニアバッグ']) }}"></a>パニアバッグ<br>
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => 'サコッシュ']) }}"></a>サコッシュ<br>
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => '輪行袋・輪行ケース']) }}"></a>輪行袋・輪行ケース<br>
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => 'ホイールバッグ']) }}"></a>ホイールバッグ<br>
						<a href="{{ route('item', ['category' => 'ギア・バッグ', 'item' => 'その他']) }}"></a>その他<br>
					</div>
				</div>
				<div class="category">
					<div class="title">
						<img src="{{ secure_asset('storage/image/icon_etc.png/') }}">
						<div class="title2">
							<h3>etc Category</h3>
						</div>
					</div>
					<div class="item">
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => '工具']) }}">工具</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'ケミカル類']) }}">ケミカル類</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'ボトル・ボトルケージ']) }}">ボトル・ボトルケージ</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'サイコン・GPS']) }}">サイコン・GPS</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'スマートウォッチ']) }}">スマートウォッチ</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => '心拍計']) }}">心拍計</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'ライト']) }}">ライト</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'ポンプ']) }}">ポンプ</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => '鍵']) }}">鍵</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'ローラー台']) }}">ローラー台</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'スタンド']) }}">スタンド</a><br>
						<a href="{{ route('item', ['category' => '工具・その他', 'item' => 'その他']) }}">その他</a><br>
					</div>
				</div>
			</div>
		</div>
		
		<div class="right_column">
			<div class="title">
				<img src="{{ secure_asset('storage/image/icon_new.jpeg/') }}">
				<div class="title3">
					<h3>Latest Review</h3>
				</div>
			</div>
			<a>最新のレビュー10件です</a>
			<?php $count=0; ?>
			@foreach ($posts as $post)
				@if ($post->status == 1)
					<?php $count++; ?>
					<div class="new_review">
						<a href="{{ route('review', ['id' => $post->id]) }}">
							<div class="new_review_img">
								@if ($post->image_path1 != null)
									<img src="{{ secure_asset('storage/image/' . $post->image_path1) }}">
									@else
									<img src="{{ secure_asset('storage/image/NO_IMAGE.jpg/') }}">
								@endif
							</div>
						</a>
						<div class="new_review_outline">
							<a href="{{ route('review', ['id' => $post->id]) }}"></a>
							<span>{{ $post->created_at }}</span><br>
							<span>{{ $post->item }}</span><br>
							<span>{{ $post->maker }}</span>
							<span>{{ $post->product }}</span><br>
						</div>
					</div>
					@if ($count == 10)
						@break
					@endif
				@endif
			@endforeach
		</div>
	</div>
@endsection