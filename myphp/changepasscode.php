<?php
session_start();
$sesid=$_SESSION['user'];
 $a=$_POST['opass'];
 $b=$_POST['npass'];
 $c=$_POST['cpass'];

 $conn=mysqli_connect("localhost","root","","phpdb");
 $sel="select * from registtbl where email='$sesid'";
 $r=mysqli_query($conn,$sel);
 $k=mysqli_fetch_array($r,MYSQLI_BOTH);

 if($k['3']==$a)
 {
 if($b==$c) 
 {
$up="update registtbl set password='$b' where email='$sesid'";
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
    echo "new pass and conf pass not same";
 }
 }
 else
 {
    echo "old pass not match";
 }


?>