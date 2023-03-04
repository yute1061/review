@extends('layouts.front')

@section('title', 'ユーザー登録')

@section('content')
    <div class="wrap">
        <br>
        <h2 style="text-align: center;">tech boost Bike Product Reviewへようこそ！</h2><br>
        <p style="text-align: center;">レビュー投稿の前に以下からユーザー登録を行ってください</p><br>
        <table width="100%" class="outer" cellspacing="1">
            <form action="{{ route('admin.user.create') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">ユーザー名（id）</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                        	<input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">パスワード</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                        	<input type="text" class="form-control" name="pass" value="{{ old('pass') }}">
                    	</div>
                    </td>
                </tr>
                <tr>
                	<td class="head2011a">
                    	<label class="col-md-3">性別</label>
                    </td>
                    <td class="head2011b">
                        <div class="col-md-4">
                            <label><input type="radio" class="radio" name="gender" value="男">男性</label>
                            <label><input type="radio" class="radio" name="gender" value="女">女性</label>
                        </div>
                    </td>
               	</tr>
                <tr>
                	<td class="head2011a">
                    	<label class="col-md-3">年齢</label>
                    </td>
                    <td class="head2011b">
                    	<div class="career">
                        	<div class="col-md-1">
                            	<input type="text" class="form-control" name="age" value="{{ old('age') }}">
                        	</div>
                        	<p>歳</p>
                        </div>
                    </td>
              	</tr>
                <tr>
                	<td class="head2011a">
                    	<label class="col-md-3">自転車歴</label>
                    </td>
                    <td class="head2011b">
                        <div class="career">
	                        <div class="col-md-1">
	                            <input type="text" class="form-control" name="career" value="{{ old('career') }}">
	                        </div>
	                        <p>年</p>
	                    </div>
                    </td>
              	</tr>
                <tr>
                	<td class="head2011a">
                    	<label class="col-md-3">主なライドスタイル</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-10">
                            <label><input type="radio" class="radio" name="ridestyle" value="race">レース</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="brevet">ブルベ・ロングライド</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="city">街乗り</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="puttering">ポタリング</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="other">その他</label>
                        </div>
                    </td>
                </tr>
                @csrf
                <tr>
                	<td>
                		<input type="submit" class="btn btn-primary" value="登録">
                	</td>
                </tr>
            </form>
        </table>
        <br>
    </div>
@endsection