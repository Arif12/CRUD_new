<?php
$id = $_POST['id'];

$examtitle = $_POST['examtitle'];
//print_r($examtitle);
$groupsubject = $_POST['groupsubject'];
$result=$_POST['resulttype'];
//print_r($result);
$passingyear=$_POST['passingyear'];
$duration=$_POST['duration'];
$link = mysqli_connect("localhost",
"root",
"lict@2",
"contact");
$query = "UPDATE `contact`.`academic` SET `examtitle` = '".$examtitle."',`groupsubject` = '".$groupsubject ."',`result` ='".$result."',`passingyear` = '".$passingyear."',`duration` ='".$duration."' WHERE `academic`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');