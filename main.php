




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
    <div class="navbar-header"><a class="navbar-brand" href="result.php">アンケート結果</a></div>
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

<!-- <div>
    <div class="container jumbotron"><?=$view?></div>
</div> -->

</body>
</html>