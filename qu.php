<?php
try{
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost:3306','root','root');
}catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$sql = "SELECT count(*) as count, age2 FROM kadai_an_db group by age2;";
$stmt = $pdo->prepare($sql);
 //execute（SQL実行時にエラーがある場合）
$status = $stmt->execute();
//fetchAll_ASSOC = foreachで回す$resultは複数行を想定している
//fetchAll_ASSOC = カラム名を添字にした配列形式（連想配列）でデータを格納
//https://takablog06.com/php_fetch_for_beginner/
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//jsに入れるための変数を作る
$a = $result[count(0)];




//正常に作動しているか確かめる
// var_dump($result)

// int=>strに変換するサーバーサイドでenum定義が必要
$enum = [
  1 => "10代",
  2 => "20代",
  3 => "30代",
  4 => "40代",
  5 => "50代",
  6 => "60代",
  7 => "70代"
];

//データ表示
$view="";
if($status==false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {

  // foreach文は配列に含まれる各要素の値を順に取り出し処理したい場合に使う
  $view .= "年齢別ef一覧";

  foreach($result as $v){
  
    $view .= '<p>';
    //foreachループ内の $v["age"] がenumのkeyに対応するのでvalueは $enum[(int) $v["age"]]で取得可能
    $view .= "年齢：".$enum[(int) $v["age2"]]."：";
    $view .= $v["count"]."人";
    $view .= '</p>';
  }
  
}






?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
　<title>グラフ</title> 
</head>
<body>

  <div>
    
    <a value="<?=$enum[(int) $v["age2"]]?>"><?=$view?></a>
    <a href="result.php">アンケート結果一覧に戻る</a>
</div>


  <canvas id="myPieChart"></canvas>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

  <script>
 var  js_test = <?php echo $a; ?>
 
 
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["10代", "20代", "30代", "40代","50代","60代","70代"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF"
          ],
          data: [1, 1, 1, 1,1,1,1]
      }]
    },
    options: {
      title: {
        display: true,
        text: '血液型 割合'
      }
    }
  });
  </script>
</body>
</html>