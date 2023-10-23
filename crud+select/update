<?php
$db_server = "localhost";
$db_user = "crud_user";
$db_password = "q1w2e3";
$db_name = "homelib"; 
try {
    // Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль,
    // также сообщаем серверу в какой кодировке должны вводится данные в таблицу бд.
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения).
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Переносим данные из полей формы в переменные.
    $book_id =       $_POST['book_id'];
    $book_author =   $_POST['book_author'];
    $book_title =    $_POST['book_title'];
    $book_text =   $_POST['book_text'];

    // Если пользователь не указал (номер Id) какую запись будем редактировать,
    // то прерываем выполнение кода.
    if(empty($book_id)){
        echo "Вы не задали ID строки для обновления данных!";
        return;
    }

    // Составвлям массив колонок для запроса обновления.
    // Если поле формы не пустое, то его значение будет добавлено в запрос.
    $update_columns = array();
if(trim($book_author) !== "")  { $update_columns[] = "author = :author"; }
    if(trim($book_title) !== "")   { $update_columns[] = "title = :title"; }
    
    if(trim($book_text) !== "")   { $update_columns[] = "text = :text"; }
   
    
    // Если есть хоть одно заполненное поле формы,
    // то составляем запрос.    
    if(sizeof($update_columns > 0)){
        // Запрос на создание записи в таблице
        $sql = "UPDATE books SET title = :title, author = :author< text = :text WHERE id=:id";
        // Перед тем как выполнять запрос предлагаю убедится, что он составлен без ошибок.
        // echo $sql;
        // Например, если в форме заполнены поля: название, автор книги и номер Id=1,
        // то запрос должен выглядеть следующим образом:
        // "UPDATE books SET title = :title, author = :author WHERE id=:id"
        
        // Подготовка запроса.
        $statement = $db->prepare($sql);

        // Привязываем к псевдо переменным реальные данные,
        // если они существуют (пользователь заполнил поле в форме).        
        $statement->bindParam(":id", $book_id);
        if(trim($book_title) !== ""){
            $statement->bindParam(":title", $book_title);
        }
        if(trim($book_author) !== ""){
            $statement->bindParam(":author", $book_author);
        }
        if(trim($book_text) !== ""){
            $statement->bindParam(":price", $book_text);
        }
               
        // Выполняем запрос.
        $statement->execute();
    
        echo "Запись c ID: " . $book_id . " успешно обновлена!";
    }
}

catch(PDOException $e) {
    echo "Ошибка при обновлении записи в базе данных: " . $e->getMessage();
}
 
// Закрываем соединение.
$db = null;
?>
