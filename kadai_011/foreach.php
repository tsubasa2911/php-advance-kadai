<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_011</title>
</head>

<body>
  <p>
    <?php
    $prduct_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    foreach($prduct_data as $key => $value) {
    echo "{$key} : {$value} <br>";
    }
    ?>
  </p>

  <p>
    <?php
    $personal_data = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];
    foreach($personal_data as $key => $value) {
      echo "{$key} : {$value} <br>";
    }
    ?>
  </p>
</body>

</html>