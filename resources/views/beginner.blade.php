<!DOCTYPE html>
<html lang="ja">
<head>
<!-- @yield('head') -->
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

<!-- <p>{{$data['name']}}さん</p>
  <p>{{$data['message']}}</p>
  <p>{{$data['aaa']}}</p>
  <p>現在は {{$today}} です</p> -->
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

<h2>wantlist</h2>
  <h3>～ほしい商品が見つからなかった人はここに書いておくと丁度誰かに譲りたいと思っている人が譲ってくれるかも～</h3>
  <?php
  // $link = mysql_connect('localhost', 'testuser', 'testuser');
  // if (!$goods) { 
  //   die('接続失敗です。'.mysql_error());
  // }
  // for($i=0;$i<5;$i++){
  //     echo '
  //       <a href="http://localhost/goodspage">
  //         <div style="border: solid 3px #000000;">
  //           <p>商品名</p>
  //           <p>価格</p>
  //           <p>あと画像も</p>
  //         </div>
  //       </a>
  //       <br>';
  //   }

    $pdo = new PDO("mysql:dbname=wantlist;charset=utf8;", "root");

    //mysql_query('SET NAMES utf8',$pdo);
    $st = $pdo->query("SELECT * FROM wantlist");
    
    $count=0;

  while ($row = $st->fetch()) {
    $wantlist_contributor=htmlspecialchars($row['wantlist_contributor']);
    $wantlist_genre=htmlspecialchars($row['wantlist_genre']);
    $wantlist_id = htmlspecialchars($row['wantlist_id']);
    $wantlist_text=htmlspecialchars($row['wantlist_text']);
    $wantlist_maxprice=htmlspecialchars($row['wantlist_maxprice']);
    $wantlist_minprice=htmlspecialchars($row['wantlist_minprice']);
    //echo "<tr><td>$name</td><td>$price 円</td></tr>";
  
   
  
    
    // echo "<a href='http://localhost/goodspage?name=$name' class='goods_btn'>
    
    // <img src=img/noimg.jpg><br>
    //           <p>商品名 $name</p>
    //           <p>価格 $price</p>
    //           <p>あと画像も</p>
    //         <br>
    //         </a>
    //         ";

    echo "<a href='http://localhost/wantlist?name=$wantlist_id' class='wantlist_btn'>$wantlist_text</a><br><br><br><br>";
  
  
  
  
  }
            ?>

  <h2>商品一覧</h2>

  <?php
  // $link = mysql_connect('localhost', 'testuser', 'testuser');
  // if (!$goods) { 
  //   die('接続失敗です。'.mysql_error());
  // }
  // for($i=0;$i<5;$i++){
  //     echo '
  //       <a href="http://localhost/goodspage">
  //         <div style="border: solid 3px #000000;">
  //           <p>商品名</p>
  //           <p>価格</p>
  //           <p>あと画像も</p>
  //         </div>
  //       </a>
  //       <br>';
  //   }

    $pdo = new PDO("mysql:dbname=goods;charset=utf8", "root");
    $st = $pdo->query("SELECT * FROM goods");
    


    $count=0;
    while ($row = $st->fetch()) {
    $goods_name = htmlspecialchars($row['goods_name']);
    $goods_id = htmlspecialchars($row['goods_id']);
    $goods_brand=htmlspecialchars($row['goods_brand']);
    $goods_text = htmlspecialchars($row['goods_text']);
    $goods_genre = htmlspecialchars($row['goods_genre']);
    $goods_price = htmlspecialchars($row['goods_price']);
    $goods_catelog = htmlspecialchars($row['goods_catelog']);
    $goods_state = htmlspecialchars($row['goods_state']);
    $goods_delivery = htmlspecialchars($row['goods_delivery']);
    $goods_prefecture = htmlspecialchars($row['goods_prefecture']);
    $goods_picture = htmlspecialchars($row['goods_picture']);
    $goods_size = htmlspecialchars($row['goods_size']);
    $goods_contributor = htmlspecialchars($row['goods_contributor']);
   
    //echo "<tr><td>$name</td><td>$price 円</td></tr>";
    echo "<a href='http://localhost/goodspage?name=$goods_id' class='goods_btn'>
    
    <img src=img/noimg.jpg><br>
              <p>$goods_name</p>
              <p>\ $goods_price</p>
              
            </a>
            ";
    $count++;
    if($count>=10){
      break ;
    }
    if($count%2==0){
      echo "<br><br>";
    }


    //echo "<br>";
    
    }


    

    
  


  ?>
  <!-- <img src="img/noimg.jpg"> -->
 

</div>

<div id="footer">
問い合わせ
<br>
このサイトについて

</div>

</body>
</html>