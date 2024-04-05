<?php
//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=mimiy_kadai;charset=utf8;host=mysql640.db.sakura.ne.jp','****','****');
} catch (PDOException $e) {
  exit('DB_CONNECT'.$e->getMessage());
}

//２．データ登録SQL作成
$sql = "SELECT * FROM contact_test";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute(); //true or false

//３．データ表示
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード] このまま覚える
//JSONに値を渡す場合に使う
// $json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お問い合わせ一覧</title>
<link rel="stylesheet" href="css/select.css">
<style>
div{padding: 10px;font-size:16px;}
td {border: 1px solid black; }
</style>
</head>

<header><p>管理者ページ - お問い合わせ一覧</p></header>

<body id="main">
<!-- Head[Start] -->

<!-- Head[End] -->


<!-- Main[Start] -->
    <table>
    <tr>
        <th>ID</th>
        <th>カテゴリ</th>
        <th>名前</th>
        <th>詳細</th>
        <th>送信日時</th>
      </tr>
    <?php foreach($values as $value){?>
      <tr>
      <td><?=$value["id"]?></td>
      <td><?=$value["category"]?></td>
      <td><?=$value["name"]?></td>
      <td><?=$value["details"]?></td>
      <td><?=$value["indate"]?></td>
    </td>
    <?php } ?>
    </table>

    <footer>
        <div class="mgmt">
            <a href="index.php">ユーザページ</a>
       </div>
    </footer>

<!-- Main[End] -->


<script>


</script>
</body>
</html>
