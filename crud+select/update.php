<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Обновить</title>
</head>
<body>
  <?php
require_once 'connect.php';
$id = $_REQUEST['nk'];
?>
<html><body>
<form method="post">
<table>
<?php $books_query=mysql_query("select * from polka1 where id='$id'");
$rows=mysql_fetch_array($books_query);
?>
<tr><td>Author:</td><td><input type="text" name="author" value="<?php echo $rows['author'];  ?>"></td></tr>
<tr><td>Title:</td><td><input type="text" name="title" value="<?php echo $rows['title'];  ?>"></td></tr>
<tr><td>Text:</td><td><input type="text" name="Text" value="<?php echo $rows['text'];  ?>"></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="save"></td></tr>
</table></form></body></html>
<?php 
if (isset($_POST['submit'])){
$author=$_POST['author'];
$title=$_POST['title'];
$text=$_POST['text'];
mysql_query("UPDATE polka1 SET author='$author', title ='$title', text='$text' where id='$id'");
header('location:index.php');
}
?>
</body>
</html>
