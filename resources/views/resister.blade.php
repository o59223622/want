<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>want</title>
  <link href="css/main.css" rel="stylesheet" type="text/css">
 
</head>






<body>
  <div id="header">


  <div id="toptop">want
    <form method="get" action="http://www.google.co.jp/search" target="_blank" style="display:inline"> 
      <input type="text" name="q" size="31" maxlength="255" value="">
  <input type="submit" name="btng" value="検索">
  <input type="hidden" name="hl" value="ja">
  </form>
  <a href="http://localhost/resister" class="square_btn">会員登録</a>
  <a href="http://localhost/login" class="square_btn">ログイン</a>
</div>
</div>

  <div id="side">
<h4>ジャンル</h4>
<ul>
<li>家電</li>
<li>ゲーム</li>
<li>服</li>
<li>アクセサリー</li>
<li>収納</li>
<li>本</li>
<li>日用雑貨</li>
<li>スポーツ</li>
</ul>

<h4>SNS</h4>
</div>

<div id="main">
<form method="post">
  <h1>会員登録フォーム</h1>
  <div class="form-group">
    <input type="text" class="form-control" name="username" placeholder="ユーザー名" required />
  </div>
  <div class="form-group">
    <input type="email"  class="form-control" name="email" placeholder="メールアドレス" required />
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="パスワード" required />
  </div>
  <button type="submit" class="btn btn-default" name="signup">会員登録する</button>
  <hr>
  <a href="http://localhost/beginner">ログインする</a>
  
</form>

 
</div>

<div id="footer">
問い合わせ
<br>
このサイトについて

</div>

</body>
</html>