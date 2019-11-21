<?php
try {
    $db = new PDO('mysql:dbname=user;host=localhost;charset=utf8','root','');
} catch (PDOException $e) {
    echo'DB接続エラー:' . $e->getMessage();
}
if(!empty($_POST)){
$upload = $db->prepare('INSERT INTO user SET email=?,psw=?,name=?,tel=?,addr=?');
echo $upload->execute(array(
$_POST['email'],
$_POST['psw'],
$_POST['name'],
$_POST['tel'],
$_POST['addr'],
));
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<title>会員登録</title>
</head>
<body>
<script>
$(function() {
  $('#checkBtn').on('change', function(){
    if ($(this).is(':checked')) {
 
    //チェックが入ったら、送信ボタンを押せる
    $('#submitBtn').prop('disabled', false);
 
    } else {
 
    //チェックが入っていなかったら、送信ボタンを押せない
    $('#submitBtn').prop('disabled', true);
    }
  });
});
</script>
<form action="" method="post">
  メールアドレス：
  <input id="email" type="text" name="email" value=""><br>
  パスワード:
  <input id="psw" type="password" name="psw" value=""><br>
  氏名：
  <input id="name" type="text" name="name" value=""><br>
  電話番号：
  <input id="tel" type="text" name="tel" value=""><br>
  住所:
  <input id="addr" type="text" name="addr" value=""><br>
  
  <!-- チェックボックス -->
<input id="checkBtn" type="checkbox"><label for="check">「<a href="#">利用規約</a>」に同意します</label>
<br>
<!-- 送信ボタン -->
<a href="login.html"><input type="button" value="戻る"><input id="submitBtn" type="submit" value="登録する" disabled>
</form>
</body>
</html>