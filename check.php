<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$nickname = $_POST['nickname']; 
$email = $_POST['email'];
$goiken = $_POST['goiken'];

$nickname = htmlspecialchars($nickname);
$email = htmlspecialchars($email);
$goiken = htmlspecialchars($goiken);

if($nickname == '')
{
	print '<font color="#ff0000">ニックネームが入力されていません！</font><br/>';
}
else
{

	print'ようこそ★';
	print $nickname;
	print '様';
	print'<br/>';
}

if($email == '')
{
	print '<font color="#ff0000">メールアドレスが入力されていません！</font><br/>';
}
else
{
	print'メールアドレス：'.$email;
	print'<br/>';
}

if($goiken == '')
{
	print'<font color="#ff0000">ご意見の入力をお願いします。</font><br/>';
}
else
{
	print'ご意見『'.$goiken.'』<br/>';
	
}

if($nickname==''||$email==''||$goiken=='')
{
	print'<form>';
	print'<input type="button" onclick="history.back()" value="アンケート入力フォームに戻る">';
	print'</form>';
}
else
{
	print'<form method="post" action="thanks.php">';
	print'<input name="nickname" type="hidden" value="'.$nickname.'">';
	print'<input name="email" type="hidden" value="'.$email.'">';
	print'<input name="goiken" type="hidden" value="'.$goiken.'">';
	print'<input type="button" onclick="history.back()" value="アンケート入力フォームに戻る">';
	print'<br/>';
	print'<input type="submit" value="ＯＫ">';
	print'</form>';
}


?>

</body>
</html>
