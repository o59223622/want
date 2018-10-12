<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>キツネ</title>
  <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>

  <H1>キツネ</H1>


  <br>
  <a href="http://localhost/resister" class="square_btn">会員登録</a>
  <br>
  <a href="http://localhost/login">ログイン</a>



<h2>{{$name}}</h2>

<img src=img/noimg.jpg>

<?php 
$pdo = new PDO("mysql:dbname=goods;", "root");
    $st = $pdo->query("SELECT * FROM goods");
    while ($row = $st->fetch()) {
      $goods_name = htmlspecialchars($row['NAME']);
      $goods_price = htmlspecialchars($row['price']);
      $goods_id=htmlspecialchars($row['goods_id']);
      //echo "<tr><td>$name</td><td>$price 円</td></tr>";
      if($goods_name==$name){
        $price=$goods_price;
        echo '<br>商品名   ';
        echo $goods_name;
        echo '<br>値段   ';
        echo $price;
        echo '円';
      }
    }
?>

<p>カートに入れる</p>


</body>
</html>