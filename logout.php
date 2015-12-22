<?php
//セッション開始
session_start();

//セッション変数の初期化 1
$_SESSION = array();

//セッションIDを破棄 2
if(isset($_COOKIE[session_name()])){
  //クッキーに書き込まれたセッションIDを破棄
  setcookie(session_name() , '' , time()-3600 , '/');
}

//セッションを破棄3
session_destroy();


?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content = "text/html;charset=utf8">
  <title>ログアウト</title>
</head>
<body>
ログアウトしました<br>
<br>
セッション情報($_SESSION) : 
<pre>
<?php
//$_SESSIONの中身をすべて表示 変数の値や変数に関する情報をすべて表示
//改行やタブをそのまま表示できるpreタグ
print_r($_SESSION);

?>
<pre>

</body>
</html>

