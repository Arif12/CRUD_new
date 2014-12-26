<?php
$link= mysqli_connect("localhost",
    "root",
    "lict@2",
    "contact");

$query="SELECT * FROM academic";

$result= mysqli_query($link,$query);
?>

<table border="1" width="70%">
    <tr>
        <td> id </td>
        <td> Exam title</td>
        <td> Group/Subject </td>
        <td> Result </td>
        <td>Passing Year</td>
        <td>duration</td>
        <!--<td> Fathers Name </td>
        <td> Mothers Name </td>
        <td>Religion</td>-->
        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['examtitle']?></td>
            <td><?php echo $row['groupsubject']?></td>
            <td><?php echo $row['result']?></td>
            <td><?php echo $row['passingyear']?></td>
            <td><?php echo $row['duration']?></td>
            <!--<td><?php echo $row['fathers_name']?></td>
            <td><?php echo $row['mothers_name']?></td>
            <td><?php echo $row['religion']?></td> -->
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php

    }
    ?>
</table>
<a href="academic.html">HOME</a>
