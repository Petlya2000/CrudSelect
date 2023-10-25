<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Update</title>
</head>
<body>
   <?php 
require_once 'connect.php'; // Подключает файл с логином/паролем и именем БД
$id = trim($_REQUEST['nk']);
echo $id
  <form method='post'><br/>
    <input type="hidden" name="id" placeholder="Nomer knigi" size="30"><br/>
    <br/>
    <input type="text" name="author" placeholder="Author" size="30"><br/>
    <br/>
    <input type="text" name="title" placeholder="Title" size="30"><br/>
    <br/>
    <input type="text" name="text" placeholder="Text" size="30"><br/>
    <br/>
    <input type="submit" id="submit" value="Update"><br/>
  </form>

$author = trim($_REQUEST['author']); // Получает содержимое поля "Автор" и убирает возможные пробелы в начале строки
$title = trim($_REQUEST['title']); // То же самое для поля "Название"
$text = mysqli_real_escape_string($conn,trim($_REQUEST['text'])); // То же самое для поля "Текст" + (см.ниже)    
$update_sql = "UPDATE polka1 SET author = '$author', title = '$title', text = '$text' WHERE id = '$id'
mysqli_query($conn,$update_sql); // отправляем данные в базу
?>
  <form method='post' action='allauthor.php'><b/>
<input id='submitread'  type='submit' value="Вернуться к поиску"><b/><b/>
</form>
<form method="post" action="index.html">
<input id="submitback" type="submit" value="На главную">
</form>
</body>
</html>
