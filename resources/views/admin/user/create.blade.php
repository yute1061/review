@extends('layouts.front')

@section('title', 'ユーザー登録')

@section('content')
    <div class="wrap">
        <br>
        <h2 style="text-align: center;">tech boost Bike Product Reviewへようこそ！</h2><br>
        <p style="text-align: center;">以下からユーザー登録を行ってください</p><br>
        <table width="100%" class="outer" cellspacing="1">
            <tbody>
                <form action="{{ route('admin.user.create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <tr>
                    <div class="form_group row">
                        <label class="col-md-2">ユーザー名</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="gender" value="男">男性</label>
                            <label><input type="radio" class="radio" name="gender" value="女">女性</label>
                        </div>
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                        </div>
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group row">
                        <label class="col-md-2">自転車歴</label>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="career" value="{{ old('career') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-md-2">主なライドスタイル</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="ridestyle" value="race">レース</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="brevet">ブルベ・ロングライド</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="city">街乗り</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="puttering">ポタリング</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="other">その他</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
    </div>
@endsection