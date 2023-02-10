<?php
$delid=$_REQUEST['idd'];
$conn=mysqli_connect("localhost","root","","phpdb" );

$sel="select * from filetbl4 where id=$delid";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

$path="image/".$k['1'];
$del="delete from filetbl4 where id=$delid";
if(mysqli_query($conn,$del))
{
    unlink($path);
    header("location:fileshow.php");
}
?>