<?php
$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select*from filetbl";
$r=mysqli_query($conn,$sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Show</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>File</th>
            <th>Action</th>
        </tr>
        <?php
        while($fetch=mysqli_fetch_array($r,MYSQLI_BOTH))
        {
        ?>
        <tr>
           <td><?php echo $fetch['0']; ?></td>
           <td><img src="fileupload/<?php echo $fetch['1'];?>" height="200px" width="200px;"/></td>
           <td><?php echo $fetch['2'];?></td>
           <td><a href="deletefile.php?ids=<?php echo $fetch['0'] ?>">Delete File</a></td>
           <td><a href="fileedit.php?idd=<?php echo $fetch['0']?>">file edit </a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>