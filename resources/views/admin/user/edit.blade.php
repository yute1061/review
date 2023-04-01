@extends('layouts.front')

@section('title', 'ユーザーの編集')

@section('content')
<div class="wrap">
    <br>
    <h4 style="text-align: center;">ユーザー情報の編集ができます</h4><br>
    <form method="POST" action="{{ route('admin.user.update') }}">
        <table style="margin: 0 auto;" width="70%" class="outer" cellspacing="1">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                <ul>
            @endif
            @csrf
            <tr>
                <td class="head2011a">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ニックネーム') }}</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $posts->name }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
            </tr>

            <tr>
                <td class="head2011a">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $posts->email }}" required autocomplete="email">
    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">性別</label>
                </td>
                <td class="head2011b">
                    @if ($posts->gender == "男性")
                        <label><input type="radio" class="radio" name="gender" value="男性" checked>男性</label>
                        <label><input type="radio" class="radio" name="gender" value="女性">女性</label>
                    @else
                        <label><input type="radio" class="radio" name="gender" value="男性">男性</label>
                        <label><input type="radio" class="radio" name="gender" value="女性" checked>女性</label>
                    @endif
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">年齢</label>
                </td>
                <td class="head2011b">
                    <div class="career">
    	                <div class="col-md-2">
    	                    <input id="age" type="text" class="form-control" name="age" value="{{ $posts->age }}">
            	        </div>
            	        <p class="note">歳</p>
            	    </div>
        	    </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">自転車歴</label>
                </td>
                <td class="head2011b">
                    <div class="career">
    	                <div class="col-md-2">
    	                    <input id="career" type="text" class="form-control" name="career" value="{{ $posts->career }}">
                        </div>
                        <p class="note">年</p>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td class="head2011a">
                    <label class="col-md-3">主なライドスタイル</label>
                </td>
                <td class="head2011b">
                    <div class="col-md-12">
                        @if ($posts->ridestyle == "レース")
                            <label><input type="radio" class="radio" name="ridestyle" value="レース" checked>レース</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ブルベ・ロングライド">ブルベ・ロングライド</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="街乗り">街乗り</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ポタリング">ポタリング</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="その他">その他</label>
                        @endif
                        @if ($posts->ridestyle == "ブルベ・ロングライド")
                            <label><input type="radio" class="radio" name="ridestyle" value="レース">レース</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ブルベ・ロングライド" checked>ブルベ・ロングライド</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="街乗り">街乗り</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ポタリング">ポタリング</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="その他">その他</label>
                        @endif
                        @if ($posts->ridestyle == "街乗り")
                            <label><input type="radio" class="radio" name="ridestyle" value="レース">レース</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ブルベ・ロングライド">ブルベ・ロングライド</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="街乗り" checked>街乗り</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ポタリング">ポタリング</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="その他">その他</label>
                        @endif
                        @if ($posts->ridestyle == "ポタリング")
                            <label><input type="radio" class="radio" name="ridestyle" value="レース">レース</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ブルベ・ロングライド">ブルベ・ロングライド</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="街乗り">街乗り</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ポタリング" checked>ポタリング</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="その他">その他</label>
                        @endif
                        @if ($posts->ridestyle == "その他")
                            <label><input type="radio" class="radio" name="ridestyle" value="レース">レース</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ブルベ・ロングライド">ブルベ・ロングライド</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="街乗り">街乗り</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="ポタリング">ポタリング</label>
                            <label><input type="radio" class="radio" name="ridestyle" value="その他" checked>その他</label>
                        @endif
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <div class="register_btn">
    	    <input type="hidden" name="id" value="{{ $posts->id }}">
    	    {{-- hidden...隠しファイル これを使うことでidをcreateに送れる --}}
    	    <input class="btn btn--red btn--cubic" type="submit" value="更新">
	    </div>
    </form>
    <br>
</div>
@endsection