<?php 
require_once 'connect.php'; // Подключает файл с логином/паролем и именем БД
$id = trim($_REQUEST['id']);
$author = trim($_REQUEST['author']); // Получает содержимое поля "Автор" и убирает возможные пробелы в начале строки
$title = trim($_REQUEST['title']); // То же самое для поля "Название"
$text = mysqli_real_escape_string($conn,trim($_REQUEST['text'])); // То же самое для поля "Текст" + (см.ниже)    
$insert_sql = "INSERT INTO polka1 (id,author, title, text)" . // Указывает в какую таблицу и в какие поля ...
                   "VALUES('{$id}','{$author}', '{$title}', '{$text}');"; // ...записывать данные
mysqli_query($conn,$insert_sql); // отправляем данные в базу
?>
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='1,URL=index.html'> <!-- Возврат обратно -->
</head>
<body>
</body>
</html>
