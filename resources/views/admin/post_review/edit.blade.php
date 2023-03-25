{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.front')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'レビューの編集')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="wrap">
        <br>
        <h4 style="text-align: center;">ユーザー情報の編集ができます</h4>
        <br>
        <table width="100%" class="outer" cellspacing="1">
            <form name="formName" method="POST" enctype="multipart/form-data" action="{{ route('admin.post_review.update') }}">
                @csrf
                <tr>
                    <td class="head2011a">
                        <label class="col-md-3">カテゴリー</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="category" onChange="functionName()">
                    	        <option value = "パーツ">パーツ</option>
                                <option value = "ウェア">ウェア</option>
                                <option value = "ギア・バッグ">ギア・バッグ</option>
                                <option value = "工具・その他">工具・その他</option>
                            </select>
                    	</div>
                    </td>
                </tr>
    
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">アイテム</label>    
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="item">
                            </select>
                    	</div>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                        <div class="item">
                            <label class="col-md-3">メーカー</label>
                        </div>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="maker">
                    	        <option> </option>
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
                    	</div>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                        <div class="item">
                            <label class="col-md-3">製品名</label>
                        </div>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-6">
                        	<input type="text" class="form-control" name="product" value="{{ $posts->product }}" required autocomplete="product">
                    	</div>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">レビュー本文</label>
                    </td>
                    <td class="head2011b">
                        <div class="col-md-6">
                    	    <textarea class="form-control" name="body" rows="20" value="{{ $posts->body }}" required autocomplete="body">{{ $posts->body }}</textarea>
                    	</div>
                    	<div class="col-md-6">
                    	    @if ($posts->image_path1 == null)
                    	        <input type="file" class="form-control-file" name="image1">
                    	    @else
                    	        <div class="caption">
                        	        <img src="{{ secure_asset('storage/image/' . $posts->image_path1) }}">
                        	        設定中: {{ $posts->image_path1 }}
                        	        <input type="file" class="form-control-file" name="image1" required autocomplete="image1"><br>
                        	        <input type="checkbox" class="form-check-innput" name="remove" value="true">画像を削除
                        	    </div>
                    	    @endif
                    	    
                    	    @if ($posts->image_path2 == null)
                    	        <input type="file" class="form-control-file" name="image2">
                    	    @else
                    	        <div class="caption">
                        	        <img src="{{ secure_asset('storage/image/' . $posts->image_path2) }}">
                        	        設定中: {{ $posts->image_path2 }}
                        	        <input type="file" class="form-control-file" name="image2" required autocomplete="image2"><br>
                        	        <input type="checkbox" class="form-check-innput" name="remove" value="true">画像を削除
                        	    </div>
                    	    @endif
                    	    
                    	    @if ($posts->image_path3 == null)
                    	        <input type="file" class="form-control-file" name="image3">
                    	    @else
                    	        <div class="caption">
                        	        <img src="{{ secure_asset('storage/image/' . $posts->image_path3) }}">
                        	        設定中: {{ $posts->image_path3 }}
                        	        <input type="file" class="form-control-file" name="image3" equired autocomplete="image3"><br>
                        	        <input type="checkbox" class="form-check-innput" name="remove" value="true">画像を削除
                        	    </div>
                    	    @endif
                    	    
                    	    @if ($posts->image_path4 == null)
                    	        <input type="file" class="form-control-file" name="image4">
                    	    @else
                    	        <div class="caption">
                        	        <img src="{{ secure_asset('storage/image/' . $posts->image_path4) }}">
                        	        設定中: {{ $posts->image_path4 }}
                        	        <input type="file" class="form-control-file" name="image4" equired autocomplete="image4"><br>
                        	        <input type="checkbox" class="form-check-innput" name="remove" value="true">画像を削除
                        	    </div>
                    	    @endif
                    	    
                    	    @if ($posts->image_path5 == null)
                    	        <input type="file" class="form-control-file" name="image5">
                    	    @else
                    	        <div class="caption">
                        	        <img src="{{ secure_asset('storage/image/' . $posts->image_path5) }}">
                        	        設定中: {{ $posts->image_path5 }}
                        	        <input type="file" class="form-control-file" name="image5" equired autocomplete="image5"><br>
                        	        <input type="checkbox" class="form-check-innput" name="remove" value="true">画像を削除
                        	    </div>
                    	    @endif
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">価格評価</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="cost">
                    	        <option>{{ $posts->cost }}</option>
                    	        <option>★</option>
                                <option>★★</option>
                                <option>★★★</option>
                                <option>★★★★</option>
                    	        <option>★★★★★</option>
                            </select>
                    	</div>
                    </td>
                </tr>
                
                <tr>
                    <td class="head2011a">
                    	<label class="col-md-3">総合評価</label>
                    </td>
                    <td class="head2011b">
                    	<div class="col-md-4">
                    	    <select name="evaluation">
                    	        <option>{{ $posts->evaluation }}</option>
                    	        <option>★</option>
                                <option>★★</option>
                                <option>★★★</option>
                                <option>★★★★</option>
                    	        <option>★★★★★</option>
                            </select>
                    	</div>
                    </td>
                </tr>
                
                <tr>
                	<td>
                		<input type="submit" value="更新">
                	</td>
                </tr>
            </form>
        </table>
        <br>
    </div>
            
        
    <h1>レビュー編集</h1>
@endsection