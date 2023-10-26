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
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = $conn->real_escape_string($_GET["id"]);
    $sql = "SELECT * FROM polka1 WHERE id = '$userid'";
    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            foreach($result as $row){
                $userauthor = $row["author"];
                $usertitle = $row["title"];
               $usertext=$row["text"];
            }
            echo "<h3>Обновление записи № $id </h3>
                <form method='post'>
                    <input type='hidden' name='id' value='$userid' />
                    <p>Автор:
                    <input type='text' name='author' value='$userauthor' /></p>
                    <p>Наим-ние:
                    <input type='text' name='title' value='$usertitle' /></p>
                    <p>Текст:
                    <input type='text' name='text' value='$usertext' /></p>
                    <input type='submit' value='Сохранить'>
            </form>";
        }
        else{
            echo "<div>Запись не найдена</div>";
        }
        $result->free();
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
elseif (isset($_POST["id"]) && isset($_POST["author"]) && isset($_POST["title"]) && isset($_POST["text"])) {
      
    $userid = $conn->real_escape_string($_POST["id"]);
    $userauthor = $conn->real_escape_string($_POST["author"]);
    $usertitle = $conn->real_escape_string($_POST["title"]);
       $usertext = $conn->real_escape_string($_POST["text"]);
    $sql = "UPDATE polka1 SET author = '$userauthor', title = '$usertitle', text = '$usertext' WHERE id = '$userid'";
      echo $sql;
    if($result = $conn->query($sql)){
        echo "\n Zapis $userid obnovlena";
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
else{
    echo "Некорректные данные";
}
$conn->close();
?>
</body>
</html>
