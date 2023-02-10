<?php
$email=$_POST['email'];
$password=$_POST['pass'];

$conn=mysqli_connect("localhost","root","","phpdb");

if(!$conn)
{
    echo("something went wrong!");

}
$sel="select * from registeretbl11 where email='$email'";
$query=mysqli_query($conn,$sel);
$fetch=mysqli_fetch_array($query);
if($fetch['email']==$email)
{
    if($fetch['password']==$password)
    {
        // echo "you are login";
        header("location:showerregt.php"); 
    }
    else
    {
        echo "password is not matched";
    }
}
    else{
        echo "invalid email";
    }

?>