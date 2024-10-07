<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>企画アイディア</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bm_list_view.php">企画案　一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>あなたの考えた企画案</legend>
     <label>企画案　名：<input type="text" name="name"></label><br>
     <label>カテゴリ：<input type="text" name="cate"></label><br>
     <label>コメント<textArea name="come" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
     <input type="hidden" name="id">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
