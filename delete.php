<?php
$id= $_GET['id'];
$link= mysqli_connect("localhost",
    "root",
    "",
    "arif");
$query="DELETE FROM `arif`.`users` WHERE `users`.`id` = $id";
mysqli_query($link,$query);


header('location:list.php');
?>