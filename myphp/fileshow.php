<?php
$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select * from filetbl4";
$r=mysqli_query($conn,$sel);
?>

<html>
    <head>

    </head>
    <body>
        <h1>file Show</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>File</th>
                <th>Date and time</th>
            </tr>
            <?php
            while ($fetch=mysqli_fetch_array($r,MYSQLI_BOTH))
            {

                ?>
            <tr>
                <td><?php echo $fetch['0'];?></td>
                <td><img src="image/<?php echo $fetch['1'];?>" height="200px;" width="200px;"/ alt=""></td>
                <td><?php echo $fetch['2']; ?></td>
                <td><a href="filedelete.php?idd=<?php echo $fetch['0'] ?>">Delete</a></td>               
                <td><a href="fileedit.php?ids=<?php echo $fetch['0'] ?>">Edit</a></td> 
            </tr>
            <?php
          
          
            }

            ?>
        </table>
    </body>
</html>