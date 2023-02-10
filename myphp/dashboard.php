<?php
session_start();
$sesid=$_SESSION['user'];

if(!isset($_SESSION['user']))
{
    header("location:signin.php");
}

$conn=mysqli_connect("localhost","root","","phpdb");
$sel = "select * from registtbl where email='$sesid'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

?>




<html>
    <head>
</head>
<body>
    <h1>dashboard</h1>
   <h1>welcome <mark><?php echo $k['1'] ?></mark>to dashboard</h1>

   <br/>
   <a href="changepass.php">Change Password</a>

   <br>
   <a href="logout.php">Logout</a>


</body>
</html>