<?php
include "conn.php";
$sel=$conn->query("select * from paeple");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h3>list of peaple</h3>
    <table border="1" style="border:collapse;">
        <tr>
            <th>pid</th>
            <th>fname</th>
            <th>lname</th>
            <th>email</th>
            <th colspan="2">action</th>
        </tr>
        <?php
        $i=1; 
        while ($rows=mysqli_fetch_array($sel)) {
            ?>
        
        
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><a href="update.php?edit=<?php echo $rows['pid'];?>">update</a></td>
                <td><a href="delete.php?delet=<?php echo $rows['pid'];?>">delete</a></td>
            </tr>
            <?php
            $i++;
        }
        
        ?>
    </table>
</body>
</html>