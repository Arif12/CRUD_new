<?php
$id= $_GET['id'];

$link= mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact");

$query="DELETE FROM `contact`.`academic` WHERE `academic`.`id` = '$id'";

mysqli_query($link,$query);

header('location:list.php');
?>