<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Обновить</title>
</head>
<body>
<form method="post">
<input type="text" name="author" placeholder="Автор" size="30"><br/>
<br/>
<input type="text" name="title" placeholder="Название" size="30"><br/>
<br/>
<input  type="text" name="text" placeholder="Текст" size="30"><br/>
<br/>
<input id="submit" type="submit" value="Update"><br/>
</form>
  <?php
require_once 'connect.php';
$id = $_REQUEST['nk'];
if (!($id)) {
  echo("Введите номер книги");
}
else {
$update_sql = "UPDATE polka1 SET author = '$author', title = '$title', text = '$text' WHERE id = '$id'
mysqli_query($conn,$update_sql);
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
