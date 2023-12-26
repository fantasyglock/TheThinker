<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'register_User';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
    die('Connection failed' . mysqli_connect_error());
} else{
    'Успешное подключение';
}
?>
