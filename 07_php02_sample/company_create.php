<?php
//var_dump($_POST);
//exit();
//POSTデータ確認
if(
    //だめな条件
  !isset($_POST['name'])|| $_POST['name'] === '' ||
  !isset($_POST['place'])|| $_POST['place'] === '' ||
  !isset($_POST['email'])|| $_POST['email'] === '' ||
  !isset($_POST['grade'])|| $_POST['grade'] === '' ||
  !isset($_POST['season'])|| $_POST['season'] === '' ||
  !isset($_POST['teach'])|| $_POST['teach'] === '' ||
  !isset($_POST['detail'])|| $_POST['detail'] === '' ||
  !isset($_POST['kind'])|| $_POST['kind'] === '' ||
  !isset($_POST['kind2'])|| $_POST['kind2'] === ''|| 
  !isset($_POST['detail2'])|| $_POST['detail2'] === '' 
){
    exit('データが足りません');
}

$name=$_POST["name"];
$place=$_POST["place"];
$email=$_POST["email"];
$grade = $_POST["grade"];
$season = $_POST["season"];
$teach = $_POST["teach"];
$detail=$_POST["detail"];
$kind = $_POST["kind"];
$kind2 = $_POST["kind2"];
$detail2 = $_POST["detail2"];


//各種項目設定
$dbn ='mysql:dbname=gs_d13_01company;charset=utf8mb4;port=3306;host=localhost';
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
$sql = "INSERT INTO company_table(id, name, place, email, grade, season, teach, detail, kind, kind2, detail2, created_at, updated_at) VALUES(NULL, :name, :place, :email,:grade,:season,:teach,:detail,:kind,:kind2,:detail2,now(), now())";


$stmt = $pdo->prepare($sql);
// バインド変数を設定
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':place', $place, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':grade', $grade, PDO::PARAM_STR);
$stmt->bindValue(':season', $season, PDO::PARAM_STR);
$stmt->bindValue(':teach', $teach, PDO::PARAM_STR);
$stmt->bindValue(':detail', $detail, PDO::PARAM_STR);
$stmt->bindValue(':kind', $kind, PDO::PARAM_STR);
$stmt->bindValue(':kind2', $kind2, PDO::PARAM_STR);
$stmt->bindValue(':detail2', $detail2, PDO::PARAM_STR);


//SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:company_input.php");
exit();


