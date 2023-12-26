<?php
require_once('db.php');
$email = $_POST['email'];
$date = $_POST['date'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$school = $_POST['school'];
$role = $_POST['role'];

if (empty($email) || empty($date) || empty($pass) || empty($name) || empty($school) || empty($role)){
    echo "Заполните все поля.";
}
else {
    $sql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows>0) {
        echo "Пользователь с такой почтой уже существует.";
    } else {
        $sql = "INSERT INTO `users` (email,date,pass,name,school,role) 
            VALUES ('$email','$date','$pass','$name','$school','$role')";
        if ($conn -> query($sql) === true){
            echo "Регистрация выполнена успешно!";
            } else {
                    echo "Ошибка: " . $conn->error;
                    }
    }
}




