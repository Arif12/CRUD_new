<?php
$id = $_GET['id'];
print_r($id);
$link = mysqli_connect("localhost", "root", "lict@2", "contact");
$query = "select * from academic WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title></title>
</head>


<body style="text-align: center; width: 100%; height: 100%;">
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <h3>Contact Information</h3>

    <label>Exam title: </label>
    <input type="text" name="examtitle" value="<?php echo $row['examtitle'];?>" />
    <br>
    <label>Group/subject: </label>
    <input type="text" name="groupsubject" value="<?php echo $row['groupsubject'];?>">
    <br>
    <label>Result </label>
    <input type="text" name="resulttype" value="<?php echo $row['result'];?>" />
    <br>
    <label>Passing Year </label>
    <input type="text" name="passingyear" value="<?php echo $row['passingyear'];?>" />
    <br>
    <label>Duration </label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />

    <button type="submit">Update</button>
</form>
</body>
</html>