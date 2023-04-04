@extends('layouts.front')

@section('title', '当サイトについて')

@section('content')
    <div class="wrap">
        <a> TOP </a>
		<a> > </a>
		<a>当サイトについて</a>
	    <h2 style="text-align: center;">当サイトについて</h2><br>
	    <br>
	    <a>RANDONNEUR bike product reviewはユーザー参加型の自転車パーツレビューサイトです。<a><br>
	    <br>
	    <a>レビュー投稿にはユーザー登録が必要です。トップメニューの ”ユーザー登録” もしくは</a><a style="text-decoration:underline; text-decoration-color:#FF0000;" href="{{ route('user.add') }}">こちら</a><a>から登録ができます。</a><br>
	    <br>
	    <a>投稿にあたっての注意事項については、</a><a style="text-decoration:underline; text-decoration-color:#FF0000;" href="{{ route('guideline') }}">投稿ガイドライン</a><a>をご覧下さい。</a><br>
	    <br>
	    <a>当サイトは掲載されている全ての情報についてその真正性・正確性・信憑性・安全性・妥当性・信頼性・適法性について保証するものではありません。また、当サイトからリンクが張られている外部サイトの利用の結果生じうるいかなる損害にも責任を負うものではありません。当サイトの閲覧者は、この点について同意した上での利用をお願いいたします。</a><br>
	    <br>
	    <a>当サイトへの投稿に含まれるショップへのリンクはサイトによってアフィリエイトリンクへと変換される場合があります。</a>
@endsection



