<?php
$a=$_POST['name'];

$b=$_POST['gnd'];

$c=implode(',',$_POST['hbb']);

$d=$_POST['city']

$e=$_POST['msg'];

$conn=mysqli_connect("localhost","root","","phpdb");

$up="update regbl set name='$a',gender='$b',hobby='$c',city='$d',message='$e' where id=$upid";
if(mysqli_query($conn,$up))
{
    header("location:regshow.php");
}
else{
    echo"data not update";
}

?>