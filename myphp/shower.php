<?php
$conn=mysqli_connect("localhost", "root", "", "phpdb");
$sel = "select * from tb2";
$r=mysqli_query($conn,$sel);
?>
<html>
<head>
</head>
<body>
    <h1>File Show</h1>
    <table border ="1">
        <tr>
            <th>ID</th>
            <th>File</th>
            <th>Date and time</th>
</tr>
<?php
 while($fetch=mysqli_fetch_array($r,MYSQLI_BOTH))
 {
?>

<tr >
    <td><?php echo $fetch['0'];?></td>
    <td><img src="downlode/<?php echo $fetch['1'];?>"height="200px" width="200px;"/></td>
    <td><?php echo $fetch['2'];?></td>
    <td><a href="deletefile.php?ids=<?php echo $fetch['0']?>">Delete File</a></td>
</tr>
<?php
}
?>
</table>

</body>
    </html>


    <!-- ? query string-->
