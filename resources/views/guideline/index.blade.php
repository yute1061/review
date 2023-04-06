@extends('layouts.front')

@section('title', '投稿ガイドライン')

@section('content')
    <div class="wrap">
        <a> TOP </a>
		<a> > </a>
		<a>投稿ガイドライン</a>
		<div style="margin-bottom: 30px;">
            <h2 style="text-align: center;">レビュー投稿ガイドライン</h2>
        </div>
        <p>当サイトではどなたでもサイクルパーツ及び自転車、自転車関連グッズ、自転車関連サービスについてのレビューを投稿することが出来ます。基本的に自転車に関係があり、情報として有用である、もしくは情報として楽しいものであれば、初心者・上級者を問わず、どのような内容のレビューでも歓迎いたします。</p>
        <a style="color: red;">なお、レビューの投稿に際しては以下の点にご留意ください。</a>
        
        <div class="guide_box">
            <span class="box-title">当サイトにおけるレビューの定義</span>
            <a>■当サイトのレビューコーナーに投稿できるのは「レビュー」のみです。他の投稿者のレビューに対するコメントや感想などを、レビューテンプレートを無視して投稿することはできません。</a><br>
            <br>
            <a>■レビューには★または☆による評価が必須です。投稿時に表示されるレビューテンプレート内の★または☆を使用してください。</a><br>
            <br>
            <a>■レビューとは対象の「評価」であり、他の投稿者の文章への感想やコメントではありません</a><br>
            <br>
            <a>■レビューする製品及びサービスは、基本的に、これまでに実際に使用したことがあること（ただし未使用の場合でも外観のみについての評価など、製品のいくつかの属性についてのレビューは可能です）</a><br>
            <br>
            <a>■レビューする製品は、必ずしも現行品でなくとも構いません。製造終了したパーツや、現在入手が難しい製品のレビューであっても、現行製品を選ぶための良きヒントとなることが多く、読者にとっては大いに参考になりえます</a><br>
            <br>
            <a>■レビューとは「レビュワーがその時点で個人的な真実と考える意見」のことであり、投稿の時点では更なる議論を必要とせず、一つの情報として独立して存在しうるものを指します</a><br>
            <br>
            <a>■投稿がレビューであるかどうかの目安として、一つの投稿を「単体として見た場合」に、読者にとって情報として有益かどうかを考えると良いでしょう</a><br>
            <br>
            <br>
            <a>レビューコーナーではいちばん良い評価を★★★★★、いちばん悪い評価を★☆☆☆☆とし、５段階での星による評価をしてください。可も不可もない平均的な評価は★★★☆☆となります。</a><br>
            <a>（以下、あくまで参考です）</a><br>
            <a>★★★★★・・・最も高い評価</a><br>
            <a>★★★★☆・・・高い評価</a><br>
            <a>★★★☆☆・・・ふつう</a><br>
            <a>★★☆☆☆・・・低い評価</a><br>
            <a>★☆☆☆☆・・・非常に低い評価</a><br>
        </div>
        <div class="guide_box">
            <span class="box-title">ユーザー登録について</span>
            <a>■レビューを投稿するには、事前のユーザー登録及びログインが必要です。トップメニューの中にある”ユーザー登録”もしくは<a style="text-decoration:underline; text-decoration-color:#FF0000;" href="{{ route('user.add') }}">こちら</a>からユーザー登録をしてください。</a><br>
            <br>
            <a>■登録時の内容は後でマイページから編集が可能ですが、パスワードは変更できません。</a><br>
            <br>
            <a>■パスワードの文字数は8文字以上で入力してください。</a><br>
            <br>
            <a>■登録完了後、サイト上部のメールアドレス・パスワード欄にそれぞれ入力してログインしてください。以降、投稿ができるようになります。</a><br>
        </div>
        <div class="guide_box">
            <span class="box-title">その他注意事項</span>
            <a>■画像のアップロードも５枚まで可能です。画像は必須ではありませんが、画像があると読んでいて楽しいと思います。ご自分で実際に使用されている写真などがあればさらに魅力的なレビューになることでしょう。<a><br>
            <br>
            <a>■ログイン中、自分が投稿したレビューページには ”編集” ”削除”ボタンが表示されるのでそちらからレビューの編集・削除が可能です。</a><br>
            <br>
            <a>■すでに誰かがレビューを書いている製品について自分もレビューを書きたいという場合は、該当製品のレビューページにある”同じ製品のレビューを追加”ボタンからの投稿を推奨します。</a><br>
            <br>
            <br>
            <a>また、以下に該当する書き込みは、事前のお断りなく削除・修正することがありますのでご了承ください。</a><br>
            <a>■サイクリング・自転車に全く関係のない書き込み</a><br>
            <a>■情報価値が極度に低い、あるいは全く認められない書き込み</a><br>
            <a>■他者に不快感を与えうる書き込み</a><br>
            <a>■商業的宣伝を目的とした書き込み</a><br>
            <a>■直接的・間接的な営利活動を含む書き込み</a><br>
            <a>■有害サイトへの誘導を含む書き込み</a><br>
            <a>■特定サイトのトラフィック向上を直接的・間接的に意図した書き込み（ブログ・ショップへの誘導等）</a><br>
            <a>■性的な表現（直接的・間接的）を含む書き込み</a><br>
            <a>■いやみ・あてつけ・あてこすり・過剰な皮肉を含む書き込み</a><br>
            <a>■マイノリティを差別・嘲笑する書き込み</a><br>
            <a>■暴力的な表現を含む、または過剰に攻撃的なトーンの書き込み</a><br>
            <a>■根拠のない誹謗中傷</a><br>
            <a>■その他当サイトが不適切と判断した全ての書き込み</a><br>
        </div>
    </div>
@endsection
