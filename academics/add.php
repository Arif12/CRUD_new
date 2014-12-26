<?php
//var_dump($_POST);
$examtitle=$_POST['examtitle'];
$groupubject=$_POST['groupsubject'];
$resulttyepe=$_POST['resulttype'];
$passingyear=$_POST['passingyear'];
$duration=$_POST['duration'];

$link=mysqli_connect("localhost","root","lict@2","contact");

$query="INSERT INTO `contact`.`academic` (`id`, `examtitle`, `groupsubject`, `result`, `passingyear`, `duration`) VALUES ('NULL', '$examtitle', '$groupubject', '$resulttyepe', '$passingyear', '$duration');";

mysqli_query($link,$query);
?>
<a href="academic.html"> Another entry </a>
<a href="list.php"> show entry</a>