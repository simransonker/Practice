<?php
$delid=$_REQUEST['ids'];
$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select * from tb2 where id=$delid";
$e=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

$path="fileuplode/".$k['1'];

$del="delete from tb2 where id=$delid";
if( mysqli_query($conn,$del))
{
    unlink($path);
    header("location:fileshow.php");
}
?>