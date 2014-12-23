<?php
$id= $_POST['Id'];

$link= mysqli_connect("localhost",
						"root",
						"",
						"information");

$query="DELETE FROM `information`.`user` WHERE `user`.`Id` = $id";

mysqli_query($link,$query);

header('location:list.php');
?>