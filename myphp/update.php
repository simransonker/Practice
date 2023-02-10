<?php
$upid=$_POST['id'];

$a=$_POST['name'];

$b=$_POST['email'];

$c=$_POST['pass'];

$conn=mysqli_connect("localhost","root","","phpdb");

$up="update tbl3 set name='$a',email='$b',password='$c' where id=$upid";
if(mysqli_query($conn,$up))
{
    header("localhost:shows.php");

}
else{
    echo "data not update";
}
?>