<?php

// DB接続
$dbn ='mysql:dbname=gs_d13_00;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// SQL作成&実行
//$sql = "SELECT * FROM todo_table ";
//日付順にする場合
$sql = "SELECT * FROM todo_table ORDER BY deadline ASC";

$stmt = $pdo->prepare($sql);

//SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//preを使うときれいにカラムと値がセットで出てくる
//echo"<pre>";
//var_dump($result);

//該当するものだけ出す場合
//var_dump($result[0]["todo"]);
//echo"<pre>";
//exit();
// SQL実行の処理

$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["deadline"]}</td>
      <td>{$record["todo"]}</td>
    </tr>
  ";
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>DB連携型todoリスト（一覧画面）</legend>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>deadline</th>
          <th>todo</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
          <?= $output ?>
      </tbody>
    </table>
  </fieldset>

  <script>
    //ここにjavascriptを記述
    const result = <?=json_encode($result)?>;
    console.log(result);
  </script>
</body>

</html>