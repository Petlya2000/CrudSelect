<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Читать</title>
</head>
<body>
<?php
require 'connect.php';
mysql_set_charset('utf8');
$id = $_REQUEST['nk'];
$sql_select = "SELECT * FROM polka1 WHERE id='$id'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
if($row) { printf($row['text']); }
else { echo ("Такой книги в базе нет"); }
?>
<form method='post' action='allauthor.php'><b/>
<input id='submitread'  type='submit' value="Вернуться к поиску"><b/><b/>
</form>
<form method="post" action="index.html">
<input id="submitback" type="submit" value="На главную">
</form>
</body>
</html>