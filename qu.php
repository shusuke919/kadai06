<?php
$id = $_GET["id"];
try{
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost:3306','root','root');
}catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}
$sql = "SELECT count(*) as count, age2 FROM kadai_an_db group by age2;";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
$view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {

foreach ($result as $v) {
    $view .= '<p>';
    $view .= "age:".$v["age2"];
    $view .= "count:".$v["count"];
    $view .= '</p>';
}
}
echo"oooooo"
?>

