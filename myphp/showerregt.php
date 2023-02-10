

<?php
$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select * from registeretbl11 where status='0'";
$r=mysqli_query($conn,$sel);
// $fetch=mysqli_fetch_array($r,MYSQLI_BOTH);
// var_dump($fetch);
// die();
?>


<html>
<head>
    
</head>
<body>
    <h1>show pages</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Status</th>
           
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
            <td><a href="block.php?idd=<?php echo $fetch['0'] ?>">BLOCK</a></td>
            
            
        </tr>
        <?php
        }
        ?>
    </table>
    
</body>
</html>