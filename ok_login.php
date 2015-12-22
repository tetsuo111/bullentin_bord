<?php
//セッションの復元　1
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content = "text/html; charset = utf8">
  <title>ログイン</title>
</head>
<body>
<?php
//ログイン確認 2
if($_SESSION['login'] === 'OK'){
  //ログイン成功
  echo 'ログイン中です';
  echo '<br><br>';
  echo '接続ユーザー:' . $_SESSION['name'];
}else{
  //ログイン失敗
  echo 'ログインしていません。';
}



?>
<br>
<a href = "logout.php">ログアウトします</a>
</body>
</html>