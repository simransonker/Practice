<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $conn=mysqli_connect("localhost","root","","phpdb");
    $select = "select * from regtbls";
    $r= mysqli_query($conn,$select);
    ?>
</head>
<body>
    <h1>show pages</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>DELETE</th>
            <th>EDIT</th>
        </tr>
        <?php
        while($fetch = mysqli_fetch_array($r,MYSQLI_BOTH))
        {
        ?>
        <tr>
            <td><?php echo $fetch['0'] ?></td>
            <td><?php echo $fetch['1'] ?></td>
            <td><?php echo $fetch['2'] ?></td>
            <td><?php echo $fetch['3'] ?></td>
            <td><a href="delete.php?idd=<?php echo $fetch['0'] ?>">DELETE</a></td>
            <td><a href="edit.php?idd=<?php echo $fetch['0'] ?>">Edit</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    
</body>
</html>