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
$id = mysqli_real_escape_string($conn, $_POST['id']);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$text = mysqli_real_escape_string($conn, $_POST['text']);	
if(empty($author) || empty($title) || empty($text)) {	
if(empty($author)) {
echo '<font color="red">author field is empty.</font><br>';
}
if(empty($title)) {
echo '<font color="red">title field is empty.</font><br>';
}
if(empty($text)) {
echo '<font color="red">text field is empty.</font><br>';
}		
} else {	
$result = mysqli_query($conn, "UPDATE polka1 SET author='$author',title='$title',text='$text' WHERE id=$id");
header("Location: allauthor.php");
}
}
?>
</body>
</html>
