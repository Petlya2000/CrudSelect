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
<?php
require_once 'connect.php';
$id = $_REQUEST['nk'];
$sql_select = "SELECT * FROM polka1 WHERE id='$id'";
$result = mysqli_query($conn,$sql_select);
$conn->query($sql) or die(mysql_error());

$query=getenv(QUERY_STRING);
parse_str($query);


$ud_author = $_POST['author'];
$ud_title = $_POST['title'];
$ud_text = $_POST['text'];

?>
<h2>Update Record <?php echo $id;?></h2>

<form action="" method="post">
<?php
	
	
	while ($row = $result->fetch_assoc()) {?>
    
<table border="0" cellspacing="10">
<tr>
<td>Title:</td> <td><input type="text" name="updateauthor" value="<?php echo $row['author']; ?>"></td>
</tr>
<tr>
<td>Publisher:</td> <td><input type="text" name="updatetitle" value="<?php echo $row['title']; ?>"></td>
</tr>
<tr>
<td>Publish Date:</td> <td><input type="text" name="updatetext" value="<?php echo $row['text']; ?>"></td>
</tr>

<tr>
<td><INPUT TYPE="Submit" VALUE="Update the Record" NAME="Submit"></td>
</tr>
</table>
<?php	}
	?>
</form>


<?php
	if(isset($_POST['Submit'])){//if the submit button is clicked
	
	$author = $_POST['updateauthor'];
		$title = $_POST['updatetitle'];
	$text = $_POST['updatetext'];

	$query="UPDATE polka1 SET author='".$author."', title='".$title."',text='".$text."' where id = '".$id."'";

	mysql_query($query) or die("Cannot update");//update or error
header('location:allauthor.php');
}
?>
</body>
</html>
