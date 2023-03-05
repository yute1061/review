@extends('layouts.front')

@section('title', 'マイページ')

@section('content')
    <div class="wrap">
        <br>
        <h2 style="text-align: center;">tech boost Bike Product Reviewへようこそ！</h2><br>
        <p style="text-align: center;">あなたのユーザー情報です</p><br>
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
                        	<p class="name">{{ Str::limit($posts->name, 100) }}</p>
                    	</div>
                    </td>
                </tr>
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">パスワード</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                        	<p class="pass">{{ Str::limit($posts->pass, 100) }}</p>
                    	</div>
                    </td>
                </tr>
                <tr>
                	<td class="head2011a">
                    	<label class="col-md-3">性別</label>
                    </td>
                    <td class="head2011b">
                        <div class="col-md-4">
                        	<p class="gender">{{ Str::limit($posts->gender, 100) }}</p>
                        </div>
                    </td>
               	</tr>
                <tr>
                	<td class="head2011a">
                    	<label class="col-md-3">年齢</label>
                    </td>
                    <td class="head2011b">
                    	<div class="age">
                        	<div class="col-md-1">
                        	    <p class="age">{{ Str::limit($posts->age, 100) }}</p>
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
                            	<p class="career">{{ Str::limit($posts->career, 100) }}</p>
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
                        	<p class="ridestyle">{{ Str::limit($posts->ridestyle, 100) }}</p>
                        </div>
                    </td>
                </tr>
                @csrf
                <tr>
                	<td>
                		<a href="{{ route('admin.user.create') }}" role="button" class="btn btn-primary">編集</a>
                	</td>
                </tr>
            </form>
        </table>
        <br>
    </div>
@endsection