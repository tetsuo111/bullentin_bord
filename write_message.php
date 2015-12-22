<?php
//セッションの復元
session_start();

//ログインチェック
require_once 'check_login_message.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" name="name" content="text/html; charset = utf8">
  <title>掲示板</title>
</head>
<body>
  Login:<b><?php echo $_SESSION['name']; ?></b>
  <hr>
  <a href="menu_message.php">メニュー</a>
  <a href = "logout.php"><ログアウト</a>
  <hr>
メッセージを入力してください<br>

<form action="insert_message.php" method="post" accept-charset="utf-8">
  タイトル:<br>
  <input type = "text" name = "title" size = "50">
  <br><br>
  メッセージ:<br>
  <textarea name="message" cols = "50" rows = "15"></textarea>
  <br><br>
  <input type = "submit" value = "メッセージの登録">
</form>
</body>
</html>