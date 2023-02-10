<?php
$upid=$_POST['id'];
$a=$_FILES['img']['name'];
$b=$_FILES['img']['tmp_name'];

$conn=mysqli_connect("localhost","root","","phpdb");

$path="image/";

$sel="select * from filetbl4  where id='$upid'";

$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r);
// var_dump($k) ;
// previous fileis delete.v
$delpath="image/".$k['1'];
echo $delpath;
// die();
$up="update filetbl4 set files='$a' where id=$upid";
if(mysqli_query($conn,$up))
{

    unlink($delpath);
   
    move_uploaded_file($b,$path.$a);
    header("location:fileshow.php");

}
else
{
    echo"file not update";
}
?>