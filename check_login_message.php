<?php 


//ログインチェック
if($_SESSION['login'] !== 'OK'){
  //ログインフォーム画面へ
  header('Location: login.php');
 

echo <<< EOT
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv = "Content-Type" content = "text/html; charset = utf8">
  <title>掲示板</title>
</head>
<body>
ログインしていません
<br><br>
  <a href = "login.php">ログイン画面を開く</a>

</body>
</html>
EOT;



 //終了
  exit();
}


?>