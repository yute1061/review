{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビューの編集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="wrap" style="margin-bottom: 20px;">
        <h4 style="text-align: center;">投稿内容の編集ができます</h4>
        <form name="formName" method="POST" enctype="multipart/form-data" action="{{ route('admin.post_review.update') }}">
            <table style="margin: 0 auto 0 auto;" width="70%" class="outer" cellspacing="1">
                @csrf
                <div style="margin-left: 135px; color: red;">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        <ul>
                    @endif
                </div>
                <tr>
                    <td class="head2011a">
                        <label class="col-md-3">カテゴリー</label>
                    </td>
                    <td class="head2011b">
                	    <select name="category" onChange="functionName()">
                	        <option>{{ $posts->category }}</option>　{{--元々の内容--}}
                	        <option value = "パーツ">パーツ</option>
                            <option value = "ウェア">ウェア</option>
                            <option value = "ギア・バッグ">ギア・バッグ</option>
                            <option value = "工具・その他">工具・その他</option>
                        </select>
                    </td>
                </tr>
    
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">アイテム</label>    
                    </td>
                    <td class="head2011b">
                	    <select name="item" value="{{ old('item') }}">
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                        <label class="col-md-3">メーカー</label>
                    </td>
                    <td class="head2011b">
                	    <select name="maker">
                	        <option>{{ $posts->maker }}</option>
                            <option>ARGON18</option>
                            <option>BASSO</option>
                            <option>BH</option>
                            <option>BIANCHI</option>
                            <option>BMC</option>
                            <option>BOMA</option>
                            <option>BRIDGESTONE</option>
                            <option>CANNONDALE</option>
                            <option>CARRERA</option>
                            <option>CAMPAGNOLO</option>
                            <option>CASTELLI</option>
                            <option>CERVELO</option>
                            <option>CHINELLI</option>
                            <option>COLNAGO</option>
                            <option>CORRATEC</option>
                            <option>DEDACCHIAI</option>
                            <option>DEDA</option>
                            <option>DEROSA</option>
                            <option>EDDYMERCKX</option>
                            <option>ENVE</option>
                            <option>FELT</option>
                            <option>FIZIK</option>
                            <option>FOCUS</option>
                            <option>FUJI</option>
                            <option>GIANT</option>
                            <option>GIOS</option>
                            <option>KHODAA BLOOM</option>
                            <option>KUOTA</option>
                            <option>LAPIERRE</option>
                            <option>LOOK</option>
                            <option>MERIDA</option>
                            <option>ORBEA</option>
                            <option>PANASONIC</option>
                            <option>PINARELLO</option>
                            <option>RALEIGH</option>
                            <option>RIDLEY</option>
                            <option>RITCHEY</option>
                            <option>SCOTT</option>
                            <option>SHIMANO</option>
                            <option>SIDI</option>
                            <option>SPECIALIZED</option>
                            <option>SRAM</option>
                            <option>STORCK</option>
                            <option>SUNBOLT</option>
                            <option>TIME</option>
                            <option>TNI</option>
                            <option>TREK</option>
                            <option>WILIER</option>
                            <option>ZIPP</option>
                            <option>その他</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                        <label class="col-md-3">製品名</label>
                    </td>
                    <td class="head2011b">
                    	<input type="text" class="form-control" name="product" value="{{ $posts->product }}">
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">レビュー本文</label>
                    </td>
                    <td class="head2011b">
                	    <textarea class="form-control" name="body" rows="20" value="{{ $posts->body }}">{{ $posts->body }}</textarea>
                	    @if ($posts->image_path1 == null)
                	        <input type="file" class="form-control-file" name="image1"><br>
                	    @else
                	        <div class="caption">
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path1) }}" class="img-review">
                    	        設定中: {{ $posts->image_path1 }}
                    	        <input type="file" class="form-control-file" name="image1"><br>
                    	        <input type="checkbox" class="form-check-innput" name="remove1" value="true">画像を削除
                    	    </div>
                	    @endif
                	    
                	    @if ($posts->image_path2 == null)
                	        <input type="file" class="form-control-file" name="image2"><br>
                	    @else
                	        <div class="caption">
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path2) }}" class="img-review">
                    	        設定中: {{ $posts->image_path2 }}
                    	        <input type="file" class="form-control-file" name="image2"><br>
                    	        <input type="checkbox" class="form-check-innput" name="remove2" value="true">画像を削除
                    	    </div>
                	    @endif
                	    
                	    @if ($posts->image_path3 == null)
                	        <input type="file" class="form-control-file" name="image3"><br>
                	    @else
            	            <div class="caption">
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path3) }}" class="img-review">
                    	        設定中: {{ $posts->image_path3 }}
                    	        <input type="file" class="form-control-file" name="image3"><br>
                    	        <input type="checkbox" class="form-check-innput" name="remove3" value="true">画像を削除
                    	    </div>
                	    @endif
                	    
                	    @if ($posts->image_path4 == null)
                	        <input type="file" class="form-control-file" name="image4"><br>
                	    @else
                	        <div class="caption">
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path4) }}" class="img-review">
                    	        設定中: {{ $posts->image_path4 }}
                    	        <input type="file" class="form-control-file" name="image4"><br>
                    	        <input type="checkbox" class="form-check-innput" name="remove4" value="true">画像を削除
                    	    </div>
                	    @endif
                	    
                	    @if ($posts->image_path5 == null)
                	        <input type="file" class="form-control-file" name="image5"><br>
                	    @else
                	        <div class="caption">
                    	        <img src="{{ secure_asset('storage/image/' . $posts->image_path5) }}" class="img-review">
                    	        設定中: {{ $posts->image_path5 }}
                    	        <input type="file" class="form-control-file" name="image5"><br>
                    	        <input type="checkbox" class="form-check-innput" name="remove5" value="true">画像を削除
                    	    </div>
                	    @endif
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">耐久性</label>
                    </td>
                    <td class="head2011b">
                	    <select name="durability">
                	        <option>{{ $posts->durability }}</option>
                	        <option>★</option>
                            <option>★★</option>
                            <option>★★★</option>
                            <option>★★★★</option>
                	        <option>★★★★★</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">使いやすさ</label>
                    </td>
                    <td class="head2011b">
                	    <select name="usability">
                	        <option>{{ $posts->usability }}</option>
                	        <option>★</option>
                            <option>★★</option>
                            <option>★★★</option>
                            <option>★★★★</option>
                	        <option>★★★★★</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">コストパフォーマンス</label>
                    </td>
                    <td class="head2011b">
                	    <select name="cost">
                	        <option>{{ $posts->cost }}</option>
                	        <option>★</option>
                            <option>★★</option>
                            <option>★★★</option>
                            <option>★★★★</option>
                	        <option>★★★★★</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">総合評価</label>
                    </td>
                    <td class="head2011b">
                	    <select name="evaluation">
                	        <option>{{ $posts->evaluation }}</option>
                	        <option>★</option>
                            <option>★★</option>
                            <option>★★★</option>
                            <option>★★★★</option>
                	        <option>★★★★★</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="register_btn">
                <input type="hidden" name="id" value="{{ $posts->id }}">
                <input class="btn btn--blue btn--cubic" type="submit" value="プレビュー">
            </div>
        </form>
    </div>
@endsection