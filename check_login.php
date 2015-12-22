<?php
//セッションの生成 1
session_start();

//ユーザー名/パスワード１
$user = htmlspecialchars($_POST['user'] ,ENT_QUOTES );
$pass = htmlspecialchars($_POST['pass'] , ENT_QUOTES);

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'sample_db';

//Mysqlへの接続 1　
$conn = mysqli_connect($db_host , $db_user , $db_pass );

if($conn){
  //データベースの選択
  mysqli_select_db($conn  , $db_name);

  //データベースへの問い合わせSQL文　3　user_nameを取り出してくる
  $sql = 'SELECT user_name FROM user_tb WHERE login_name = "'.$user.'" AND login_password = "'.$pass.'"';

  //SQL文の実行4
  $query = mysqli_query($conn , $sql);

}

  //認証５　SQL文の中から取り出すデータ件数を調べる
if(mysqli_num_rows($query) === 1){
  //ログイン成功
  $login = 'OK';
  //データの取り出し 6　データをオブジェクトとして取り出せる
  $row = mysqli_fetch_object($query);
  //表示用ユーザー名をセッション変数に保存
  $_SESSION['name'] = $row->user_name;
}else{
  //ログイン失敗
  $login = 'Error';
}


/*

//認証
if(($user === 'login_user') && ($pass === 'login_pass')){
  //ログイン
  $login = 'OK';
}else{
  //ログイン失敗
  $login = 'Error';
}

*/

//セッション変数に記録 2　
$_SESSION['login'] = $login;



//移動２
if($login === 'OK'){
  //ログイ'ン成功:ログイン成功画面へ HTTP情報を送信する関数　リダイレクト　画面の移動　
  //header('Location: ok_login.php');
  header('Location: menu_message.php');
}else{
  //ログイン失敗:ログインフォームへ画面へ
  header('Location: login.php');
}


?>