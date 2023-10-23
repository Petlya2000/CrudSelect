<?php 
require_once 'connect.php'; // Подключает файл с логином/паролем и именем БД
$id = trim($_REQUEST['id']);
$author = trim($_REQUEST['author']); // Получает содержимое поля "Автор" и убирает возможные пробелы в начале строки
$title = trim($_REQUEST['title']); // То же самое для поля "Название"
$text = mysqli_real_escape_string($conn,trim($_REQUEST['text'])); // То же самое для поля "Текст" + (см.ниже)    
$update_sql = "UPDATE polka1 SET name = '$author', age = '$title', text = '$text' WHERE id = '$id'
mysqli_query($conn,$update_sql); // отправляем данные в базу
?>
