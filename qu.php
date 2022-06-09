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

//jsに入れるための変数を作　10代〜70代までを作成
$a = $result[0];
$b = $result[1];
$c = $result[2];
$d = $result[3];
$e = $result[4];
$f = $result[5];
$g = $result[6];
var_dump($result);

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
  $view .= "年齢別dffd一覧";

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
    
    <a><?=$view?></a>
    <a href="result.php">アンケート結果一覧に戻る</a>
</div>


  <canvas id="myPieChart"></canvas>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

  <script>
// echoの出力対象をjson_encodeでjavascriptのobjectに変換
// https://qiita.com/cr_tk/items/900914e8a6e19ee3c5b7
 var  js_a = <?php echo json_encode($a); ?>;
 var  js_b = <?php echo json_encode($b); ?>;
 var  js_c = <?php echo json_encode($c); ?>;
 var  js_d = <?php echo json_encode($d); ?>;
 var  js_e = <?php echo json_encode($e); ?>;
 var  js_f = <?php echo json_encode($f); ?>;
 var  js_g = <?php echo json_encode($g); ?>;

// chart.jsを使用する
// https://qiita.com/cr_tk/items/900914e8a6e19ee3c5b7
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
          data: [
            js_a.count,
            js_b.count,
            js_c.count,
            js_d.count,
            js_e.count,
            js_f.count,
            js_g.count,
                       ]
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