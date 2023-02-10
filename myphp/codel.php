<?php
$delid=$_REQUEST['idd'];
$conn=mysqli_connect("localhost","root","","phpdb");

$ins="insert into oldtable(name,mobile,gender,email) select name,mobile,gender,email from currenttable where id=$delid";
if(mysqli_query($conn,$ins))
{

$del="delete from currenttable where id=$delid";
if(mysqli_query($conn,$del))
{
    
    header("location:showco.php");
}
else
{
echo "false";
}
}
?>