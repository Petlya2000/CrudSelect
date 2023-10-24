<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Поиск по названию</title>
</head>
<body>
<?php
require_once 'connect.php';
$title = $_REQUEST['nk'];
if (!($title)) {
  echo("Введите наим-ние книги");
}
else {
$sql_select = "SELECT * FROM polka1 WHERE title='$title'";
$result = mysqli_query($conn,$sql_select);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result)==0){
  echo("Таких книг нет");
  else {
  do 
  {
printf($row['id']); printf("<br/>");printf($row['author']); printf("<br/>"); printf($row['title']);printf("<br/>"); printf($row['text']); }
}
  while($row = mysqli_fetch_array($result));
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
