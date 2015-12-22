<?php
//セッションの生成 1
session_start();

//ユーザー名/パスワード１
$user = htmlspecialchars($_POST['user'] ,ENT_QUOTES );
$pass = htmlspecialchars($_POST['pass'] , ENT_QUOTES);

//認証
if(($user === 'login_user') && ($pass === 'login_pass')){
  //ログイン
  $login = 'OK';
}else{
  //ログイン失敗
  $login = 'Error';
}

//セッション変数に記録 2
$_SESSION['login'] = $login;


//移動２
if($login === 'OK'){
  //ログイ'ン成功:ログイン成功画面へ HTTP情報を送信する関数　リダイレクト　画面の移動　
  header('Location: ok_login.php');
}else{
  //ログイン失敗:ログインフォームへ画面へ
  header('Location: login.php');
}


?>