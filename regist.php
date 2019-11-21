<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会員登録</title>
</head>
<body>
<?php

$con = mysql_connect('127.0.0.1', 'root', '1234');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysql_select_db('phpdb', $con);
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysql_query('SET NAMES utf8', $con);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$id   = $_REQUEST['id'];
$psw  = $_REQUEST['psw'];
$name = $_REQUEST['name'];
$tel  = $_REQUEST['tel'];
$addr  = $_REQUEST['addr'];
$email = $_REQUEST['email'];

$result = mysql_query("INSERT INTO address(id, psw, name, tel, addr) VALUES('$id', '$psw', '$name','$tel' ,'$addr')", $con);
if (!$result) {
  exit('データを登録できませんでした。');
}

$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
<p>登録が完了しました。<br /><a href="touroku.html">戻る</a></p>
</body>
</html