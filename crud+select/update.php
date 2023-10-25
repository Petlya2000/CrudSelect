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
$query="select * from polka1 where id='$id'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

?>


<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>

<?php 

while($row = mysql_fetch_array($result))
            {

$id = $row['id'];
$author = $row['authro'];
$title = $row['title'];
$text = $row['text'];

?>


<td width="100"></td>
<td><?=$id?></td>
</tr>
<tr>
<td width="100">Author</td>
<td><input name="author" type="text" value="<?=$author?>"></td>
</tr>
<tr>
<td width="100">Title</td>
<td><input name="title" type="text" value="<?=$title?>"></td>
</tr>
<tr>
<td width="100">Text</td>
<td><input name="text" type="text" value="<?=$text?>"></td>
</tr>
<?php } ?>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>



<?php

if(isset($_POST['update']))
{

$author =$_POST['author'];
$title =$_POST['title'];
$text =$_POST['text'];


$sql = mysql_query("UPDATE polka1 SET author = '$author', title = '$title', text = 'text' WHERE id = '$id'");


mysqli_query($conn,"UPDATE polka1 SET author='$author', title ='$title', text='$text' where id='$id'");
header('location:index.php');
}
?>
</body>
</html>
