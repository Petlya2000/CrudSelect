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
if (!($id)) {
  echo("Введите номер книги");
}
else {
$sql_select = "SELECT * FROM polka1 WHERE id='$id'";
$result = mysqli_query($conn,$sql_select);
$row = mysqli_fetch_array($result);
if($row) { printf($row['id']);
	echo "<INPUT type="text" name="author" value="author">; 
 	echo "<INPUT type="text" name="title" value="title">;
	 echo "<INPUT type="text" name="text" value="text">;
  $update_sql = "UPDATE polka1 SET author = '$author', title = '$title', text = '$text' WHERE id = '$id'
mysqli_query($conn,$update_sql);
  }
}else { echo ("Такой книги в базе нет"); }
}
?>
<form method='post' action='allauthor.php'><b/>
<input id='submitread'  type='submit' value="Вернуться к поиску"><b/><b/>
</form>
<form method="post" action="index.html">
<input id="submitback" type="submit" value="На главную">
</form>
</body>
</html>
