<?php



$d = date("s");
if ($d >=40 ){
  echo '<p style="background:red;">40秒以上</p>';
}else if ($d >=20 ){
  echo '<p style="background:blue;">1秒以上</p>';
}else{
  echo '<p style="background:yellow;">20秒以上</p>';
}
echo '<p>現在：'.$d.'秒</p>';

?>




<!-- 　チェックボックス
<div>
    <input type="checkbox" name="food[]" value="寿司"> 寿司　
    <input type="checkbox" name="food[]" value="天ぷら"> 天ぷら　
    </div>

セレクトボックス -->

<!-- <div>
<select name= "fruits">
      <option value = "りんご">りんご</option>
      <option value = "れもん">れもん</option>
      <option value = "メロン">メロン</option>
    </select>
    </div> -->






<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<form method="get" action="form_get.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>