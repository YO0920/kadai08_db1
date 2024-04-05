<?php
//1. POSTデータ取得
//[name,email,age,naiyou]
$category = $_POST["category"];
$name     = $_POST["name"];
$details  = $_POST["details"];

//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=mimiy_kadai;charset=utf8;host=mysql640.db.sakura.ne.jp','****','****');
} catch (PDOException $e) {
  exit('DB_CONNECT:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql = "INSERT INTO contact_test(id,category,name,details,indate) VALUES(NULL,:category,:name,:details,sysdate());";
$stmt = $pdo->prepare($sql); //2. ここにセットされる
$stmt->bindValue(':category', $category,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT) 1. コレでセットする
$stmt->bindValue(':name',     $name,       PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':details',  $details,    PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //true or false、 実行する

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERRPR:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit();

//これはパターンだからそのまま使うもの！
}
?>
