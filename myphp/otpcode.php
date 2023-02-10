<?php

session_start();
$sesid=$_SESSION['us'];
$otp=$_POST['otp'];


$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select * from registtbl where email='$sesid'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['6']==$otp)
{
    header("location:cpass.php");

}
else
{
    echo "otp not match";
}
?>