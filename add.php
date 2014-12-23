<?php
$firstName= $_POST['firstName'];
$lastName= $_POST['lastName'];
$mobile= $_POST['mobile'];

$link= mysqli_connect("localhost",
						"root",
						"",
						"information");

$query = "INSERT INTO `information`.`user` (`Id`, `First_name`, `Last_name`, `Mobile`) VALUES ('NULL', '$firstName', '$lastName', '$mobile');";

mysqli_query($link, $query);
?>
 <a href="create.html"> Another entry </a>