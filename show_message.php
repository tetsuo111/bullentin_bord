<?php
//セッションの復元
session_start();

//ログインチェック
require_once 'check_login_message.php';

//ここ変数に値が入っていないエラー　そもそもいらない疑惑　だって$_POSTを飛ばしてるわけじゃないもの
if(isset($_POST['title']) || isset($_POST['message'])){
  //タイトル、メッセージ
  $title = htmlspecialchars($_POST['title'] , ENT_QUOTES);
  $message = htmlspecialchars($_POST['message'] , ENT_QUOTES);
}


//MYSQLへの接続
$conn = mysqli_connect('127.0.0.1' , 'root' , 'root');

if($conn){
  //データベースの選択
  mysqli_select_db($conn , 'sample_db');
  mysqli_query($conn , 'SET NAMES utf8');
  //データベースから取り出しSQL文 1
  $sql = 'SELECT message_id , message_title , message , user_name , entry_date FROM message_tb ORDER BY message_id';

  //SQL文の実行
  $query = mysqli_query($conn , $sql);
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset = utf8">
  <title>掲示板</title>
</head>
<body>
 <?php
require_once 'header_message.php';

 ?>
  メッセージ一覧<br>
  <table border="1">
  <tr bgcolor="#CCCCCC">
    <td>ID</td>
    <td>タイトル</td>
    <td>メッセージ</td>
    <td>ユーザー</td>
    <td>登録日</td>
  </tr>

<?php
//データの取り出し 2
while($row = mysqli_fetch_object($query)){
  echo '<tr>';
  echo '<td>'.$row->message_id.'</td>';
  echo '<td>'.$row->message_title.'</td>';
  echo '<td>'.nl2br($row->message).'</td>';
  echo '<td>'.$row->user_name.'</td>';
  echo '<td>'.$row->entry_date.'</td>';
  echo '</tr>';
}
?>


  </table>
</body>
</html>