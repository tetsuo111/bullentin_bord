<?php 
//セッションの復元
session_start();

//ログインチェック　1
require_once 'check_login_message.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf8">
  <title>掲示板</title>
</head>
<body>
<?php
  require_once 'header_message.php';

?>
  掲示板メニュー<br>
<ul>
  <li><a href="write_message.php">メッセージを書く</a>
  <li><a href="show_message.php">メッセージを読む</a>
</ul>
</body>
</html>