@extends('layouts.front')

@section('title', 'カテゴリー')

@section('content')
	<div class="wrap">
	  <div class="item_pankuzu">
  		<a> {{ $category }}</a>
  		<a> > </a>
  		<a> {{ $item }}</a>
  	</div>
		
		<?php $count=0; ?>
		<table width="80%" style="margin: 0 auto;" class="itemlist" cellspacing="1">
		  <tr>
		    <th class="head2011d">
		      <span>メーカー</span>
		    </th>
		    <th class="head2011d">
		      <span>製品名</span>
		    </th>
		    <th class="head2011d">
		      <span>投稿日</span>
		    </th>
		  </tr>
      @foreach ($posts as $post)
        @if ($post->status == 1)
          @if ($post->item == $item)
            <?php $count++; ?>
            <tr>
              <td class="head2011d">
                <a href="{{ route('review', ['id' => $post->id])}}"></a>
                <p>{{ $post->maker }}</p>
              </td>
              <td class="head2011d">
                <a href="{{ route('review', ['id' => $post->id])}}"></a>
                <p class="overflow_itemlist">{{ $post->product }}</p>
              </td>
              <td style="text-align: center;" class="head2011d">
                <a href="{{ route('review', ['id' => $post->id])}}"></a>
                <p>{{ $post->created_at }}</p>
              </td>
            </tr>
          @endif
        @endif
      @endforeach
		</table>
		<div style="margin-top: 20px;">
      @if ($count == 0)
        <p style="text-align: center;">まだレビューがありません</p>
			@endif
	</div>
@endsection


{{--<table width="100%" class="outer" cellspacing="1">
  <tbody><tr>
<td class="cat" colspan="3" align="center">
<b>リジッドフォーク</b><br>
<small>Fork - Fourche - Forcelle - 前叉 - 前叉</small>
</td>
  </tr>
<!--sort-->
  <tr class="foot">
    <td colspan="3" align="right">
   <small>並べ替え:</small><select name="sortname"><option value="t.topic_title" selected="selected">アルファベット順で</option><option value="t.topic_replies">レビューの数で</option><option value="t.topic_views">閲覧数で</option><option value="p.post_time">投稿日時で</option></select> <select name="sortorder"><option value="ASC" selected="selected">昇順</option><option value="DESC">降順</option></select> <select name="sortsince"><option value="1">過去1日分</option><option value="2">過去2日分</option><option value="5">過去5日分</option><option value="10">過去10日分</option><option value="20">過去20日分</option><option value="30">過去30日分</option><option value="40">過去40日分</option><option value="60">過去60日分</option><option value="90">過去90日分</option><option value="180">過去180日分</option><option value="365">過去1年分</option><option value="20000" selected="selected">全て</option></select> <input type="hidden" name="forum" value="6"><input type="submit" class="formButton3" name="refresh" value="ゴー!">
    </td>
  </tr>--}}
  
{{--  
<!--Reviews and Views-->
  <tr style="font-size:x-small;background-color:#FFFFFF;">
    <td>
    </td>
    <td nowrap="" align="center">&nbsp;投稿数&nbsp;</td>
    <td nowrap="" align="center">閲覧数</td>
</tr>
  <!-- start forum topic -->
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=7651&amp;forum=6">3T FUNDA PRO</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">5</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">40142</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=7494&amp;forum=6">3T FUNDA TEAM</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">3</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">30403</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=8225&amp;forum=6">Alpha Q CS-10</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">12991</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=11050&amp;forum=6">Alpha Q GS-20</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">6170</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=3984&amp;forum=6">ANSWER ACCUTRAX アキュトラックス</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">12260</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=4457&amp;forum=6">BAZOOKA 700C クロスバイク用クロモリフォーク Ｖブレーキ用</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">18448</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=8671&amp;forum=6">BAZOOKA　HCCR　クロモリハイクラウン26インチストレートフォーク</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">15329</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=11725&amp;forum=6">BOMA  カーボンモノコック フォーク　F-02（ストレート）</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">7194</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=3809&amp;forum=6">Bontrager カーボンリジットフォーク 26inch用</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">17063</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=12603&amp;forum=6">Columbus Minimal</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">10204</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=9904&amp;forum=6">Columbus TuskAir</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">7157</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=4964&amp;forum=6">EASTON EC90 AERO 1inch</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">18131</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=7951&amp;forum=6">EASTON EC90 SL Straight</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">12843</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=4516&amp;forum=6">Easton EC90 SLX Curved 1 1/8 2009</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">2</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">33356</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=3754&amp;forum=6">EC90 SL カーブ</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">19249</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=8535&amp;forum=6">EC90SLX curved　290g</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">7693</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=11506&amp;forum=6">ENVE　ROAD FORK 1.0</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">10823</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=13236&amp;forum=6">grunge カーボンディスクリジッドストレートフォーク</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">5835</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=11806&amp;forum=6">Kinesis - PureCX カーボンフォーク</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">13289</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=14899&amp;forum=6">Lixada ディスクブレーキ ロードバイクフォーク 700Cテーパード カーボンファイバー</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">5981</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=6899&amp;forum=6">MOSSO　リジットフォーク</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">3</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">46440</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=6129&amp;forum=6">OnebyESU OBS-C1 クロスモノコック</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">14931</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=14165&amp;forum=6">OnebyEsu OBS-CBD クロスベンドディスクモノコック</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">5374</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=10566&amp;forum=6">OVAL R900 カーボン700C</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">7714</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=8160&amp;forum=6">Pro Carbon Cyclo-Crossフォーク</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">7984</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=9728&amp;forum=6">Ritchey Comp 1inch</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">8496</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=8328&amp;forum=6">Salsa CroMoto Rigid Forks（1 1/8” 26”　85mmトラベルサス代替用）</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">7308</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=8999&amp;forum=6">Salsa CroMoto Rigid フォーク（ブラック　オプション1）</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">12003</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=9809&amp;forum=6">Surly - 1x1 Rigid</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">8567</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=17077&amp;forum=6">THM Scapula CT Road Carbon Fork Tapered - matt black</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">1495</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=9151&amp;forum=6">Tifosi Carbon 1 inch</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">2</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">8821</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=6242&amp;forum=6">Time Avant Stiff</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">18785</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=6826&amp;forum=6">Time MILLENIUM</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">10758</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=11108&amp;forum=6">TIME MILLENIUM Stiff+</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">6540</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=11048&amp;forum=6">TRIGON AERO FIN ROAD FORK</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">5334</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=8929&amp;forum=6">TRIGON MC01A 26インチ</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">18454</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=3542&amp;forum=6">viva MTBフロントフォーク</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">24049</td>
  </tr>
    <tr class="odd">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=15990&amp;forum=6">Wound Up Road X Fork 1"</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">4482</td>
  </tr>
    <tr class="even">
    <td>
<div class="nondeco12hu"><a href="viewtopic.php?topic_id=8969&amp;forum=6">ノーブランド　700Cクロスバイク用アルミフォーク　1-1/8インチ</a>
<div>
</div></div></td>
<!--Reviews-->
<td align="center" valign="middle">1</td>
<!-- Views-->
    <td align="center" valign="middle" nowrap="">9338</td>
  </tr>
    <!-- end forum topic -->
</tbody></table>--}}