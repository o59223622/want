<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>キツネ</title>
  <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>

  <H1>wantlist</H1>
  <h2>{{$name}}</h2>


  <?php 
$pdo = new PDO("mysql:dbname=wantlist;", "root");
    $st = $pdo->query("SELECT * FROM wantlist");
    while ($row = $st->fetch()) {
      $want_name = htmlspecialchars($row['name']);
      $want_text = htmlspecialchars($row['text']);
      //$goods_id=htmlspecialchars($row['goods_id']);
      //echo "<tr><td>$name</td><td>$price 円</td></tr>";
      if($want_name==$name){
        //$price=$goods_price;
        echo '<br>商品名   ';
        echo $want_name;
        echo '<br>値段   ';
        echo $want_text;
        //echo '円';
      }
    }
?>






</body>
</html>