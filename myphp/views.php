<?php
$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select * from registeretbl11 where status='Block'";
$j=mysqli_query($conn,$sel);



?>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    <?php
    while($f=mysqli_fetch_array($j))
    {
        ?>
        <tr>
            <td><?php echo $f['0']; ?></td>
            <td><?php echo $f['1']; ?></td>
            <td><?php echo $f['2']; ?></td>
            <td><?php echo $f['3']; ?></td>
            
        </tr>
        <?php
    }
    ?>
</table>