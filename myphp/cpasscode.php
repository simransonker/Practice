<?php
session_start();
$sesid=$_SESSION['us'];

$a=$_POST['npass'];

$b=$_POST['cpass'];

$conn=mysqli_connect("localhost","root","","phpdb");
if($a==$b)
{
    $up="update registtbl set password='$a' where email='$sesid'";
    if(mysqli_query($conn,$up))
    {
        header("location:signin.php");

    }
    else
    {
        echo "password not change";
    }
}
else
{
    echo "new and conf pass not same`";
}
?>