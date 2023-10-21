<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Все авторы</title>
</head>
<body>
<?php
require_once 'connect.php'; // Подключает файл с логином/паролем и именем БД
$sql_select = "SELECT * FROM polka1"; // Выбираем таблицу из которой читать данные
$result = mysqli_query($conn,$sql_select); // Запрос к БД
$row = mysqli_fetch_array($result); // Разбираем полученый массив 
do
{
  printf("<p><b>Номер книги: ".$row['id']."</b></p><p><b>Автор: ".$row['author']."</b></p><p><b>Название: ".$row['title']
  ."</b></p>----------------------------------------<b>");
}
while($row = mysqli_fetch_array($result));
?>
<form method='post' action='read.php'><b>
<input id="Nknig" type='text' name='nk' placeholder="Номер книги"><b><b>
<br>
<input id='submitread'  type='submit' value='Читать...'><b><b>
</form>
<form method="post" action="index.html">
<br>
  <input id="submitback" type="submit" value="На главную">
</form>
</body>
</html>
