<?php
session_start();
$db = mysqli_connect("localhost","root","","games");
if(!$db){
    die('Ошибка подключения');
}
function autor($login,$password){
    global $db;
    $result=mysqli_query($db,"SELECT * FROM  `users` WHERE login = '$login' AND password=md5('$password');");
     return mysqli_num_rows($result);}
    