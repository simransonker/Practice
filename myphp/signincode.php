<?php
session_start();

 $email=$_POST['email'];
 $password=$_POST['pass'];
 

 $conn=mysqli_connect("localhost","root","","phpdb");

$sel="select * from  registtbl where email='$email'";

$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
if($k['2']==$email)
{
    if($k['3']==$password){
        $_SESSION['user']=$email;
        header("location:dashboard.php");

    }

else{
    echo"password not match";

}
}
else{
    echo"emailid not match";
}

?>