{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビューのプレビュー')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="wrap">
            <br>
            <h2 style="text-align: center;">レビューのプレビュー</h2>
            <br>
            <table width="100%" class="outer" cellspacing="1">
                <form name="formName" method="POST" action={{ route('admin.post_review.preview') }}>
                
@endsection