<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php

    $nums = [15, 4, 18, 23, 10];
    $order = true;

    function sort_2away($array, $order) {

      // TRUEなら昇順、FALSEなら降順
      if($order) {
        echo '昇順にソートします。<br>';
        sort($array);
      } else {
        echo '降順にソートします。<br>';
        rsort($array);
      }
      // 配列の値を１つずつ出力する
      foreach ($array as $value) {
        echo $value . '<br>';
      }
    }
     // 関数の呼び出し
    sort_2away($nums, true);
    sort_2away($nums, false);
  
    ?>
  </p>
</body>

</html>