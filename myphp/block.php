<?php
$conn=mysqli_connect("localhost","root","","phpdb");
$id=$_REQUEST['idd'];
$up="update registeretbl11 set status='Block' where id='$id'";
if(mysqli_query($conn,$up))
{
    echo "this user bloked";
}
?>