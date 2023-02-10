<?php
$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select * from currenttable";
$r=mysqli_query($conn,$sel);
// $fetch=mysqli_fetch_array($r,MYSQLI_BOTH);
// var_dump($fetch);
// die();
?>

<html>
    <head>

    </head>
    <body>
        <h1>CURRENT DATA</h1>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Email</th>
                <th>ACTION</th>

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
                <td><a href="codel.php?idd=<?php echo $fetch['0']?>">DELETE</a></td>


            </tr>
            <?php
                }
                ?>


<?php
$conn=mysqli_connect("localhost","root","","phpdb");
$seli="select * from oldtable";
$k=mysqli_query($conn,$seli);
// $fetch=mysqli_fetch_array($r,MYSQLI_BOTH);
// var_dump($fetch);
// die();
?>

        </table>

        <h1>OLD DATA</h1>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Email</th>

            </tr>
            <?php
            while($kf = mysqli_fetch_array($k,MYSQLI_BOTH))
             {
                ?>
         

            <tr>
                <td><?php echo $kf['1'] ?></td>
                <td><?php echo $kf['2'] ?></td>
                <td><?php echo $kf['3'] ?></td>
                <td><?php echo $kf['4'] ?></td>



            </tr>
            <?php
                }
                ?>

        </table>

    </body>
</html>