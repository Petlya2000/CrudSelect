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
require_once 'connect.php';
$id = $_REQUEST['nk'];
$sql_update = "UPDATE polka1 
         SET author = '".mysql_real_escape_string($_POST['author'])."', 
         SET title = '".mysql_real_escape_string($_POST['title'])."', 
         SET text = '".mysql_real_escape_string($_POST['text'])."', 
         WHERE $id='".mysql_real_escape_string($_POST['$id'])."'";
$result = mysqli_query($conn,$sql_update);
?>
<form method='post' action='allauthor.php'><b/>
<input id='submitread'  type='submit' value="Вернуться к поиску"><b/><b/>
</form>
<form method="post" action="index.html">
<input id="submitback" type="submit" value="На главную">
</form>
</body>
</html>
