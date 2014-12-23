<?php
$id=$_POST['Id'];

$link=mysqli_connect("localhost",
						"root",
						"",
						"information");

$query="SELECT * FROM user WHERE Id = $id";

$result=mysqli_query($link,$query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>
<a href ="list.php">Go to Home</a>
