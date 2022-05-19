<?php

// 入力チェック（受信確認処理追加）
if(
  !isset($_GET["name"]) || $_GET["name"]=="" ||
  !isset($_GET["email"]) || $_GET["email"]=="" ||
  !isset($_GET["naiyou"]) || $_GET["naiyou"]==""
){
  exit('ParamError');
}

// getデータ取得
$name = $_GET["name"];
$email = $_GET["email"];
$naiyou = $_GET["naiyou"];
// echo  $name. "<br>";
// echo  $mail. "<br>";

// DB接続します（エラー処理追加）コピペして部分的に書き換えて使うと良い！
try {
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost:3306','root','root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

// データ登録　SQL作成
$stmt = "INSERT INTO kadai_an_db(id, name, email, naiyou,
indate )VALUES(NULL, :a1, :a2, :a3, sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

// データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //５．index.phpへリダイレクト
  header("Location: main.pdp");
  exit;

}
?> 


