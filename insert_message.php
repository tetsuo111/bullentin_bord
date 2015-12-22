<?php
//セッションの復元
session_start();

//ログインチェック
require_once 'check_login_message.php';

//タイトル、メッセージ
$title = htmlspecialchars($_POST['title'] , ENT_QUOTES);
$message = htmlspecialchars($_POST['message'] , ENT_QUOTES);

//MYSQLへの接続
$conn = mysqli_connect('127.0.0.1' , 'root' , 'root');

if($conn){
  //データベースの選択
  mysqli_select_db($conn , 'sample_db');
  mysqli_query($conn , 'SET NAMES utf8');
  //データベースへ書き込むSQL文　1
  $sql = 'INSERT INTO message_tb(message_title , message , user_name)VALUES ("'.$title.'" , "'.$message.'" , "'.$_SESSION['name'].'")';

  //SQL文の実行
  $query = mysqli_query($conn , $sql);
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content = "text/html; charset = utf8">
<title>掲示板</title>
</head>
<body>
<?php
  require_once 'header_message.php';
  ?>
  メッセージを登録しました<br>
  <br><br>
  <a href="show_message.php">メッセージを読む</a>



</body>
</html>




