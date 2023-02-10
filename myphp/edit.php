<?php
$edite id=$_REQUEST['idd'];
$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select * from tbl3 where id="$editid";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
?>

<html>
    <head></head>
    <body>
        <h1>Edit Page</h1>
        <form action="progcode1.php" method="post">
            <input type="hidden" value="<?php echo $k['0']?>"name="id"><br> 
            Name<input type="text" value="<?php echo $k['1']?>" name="name"><br>
            Email<input type="email" value="<?php echo $k['2']?>" name="email"></br>
            Password<input type="password" value="<?php echo $k['3']?>" name="pass"><br>
            <button>Update</button>

            
    </body>
    </html>
