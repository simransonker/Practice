<?php
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['pass'];

 $conn=mysqli_connect("localhost","root","","phpdb");
 if(!$conn)
 {
    echo("something went wrong!");

 }
 else
 {
    $ins ="INSERT INTO `registeretbl11`(`name`, `email`, `password`, `date`, `time`, `status`) VALUES ('$name','$email','$password','0','0','0')";
    if(mysqli_query($conn,$ins))
    {
     echo("<script>window.location.href='login11.php'; alert('Data Insert!')</script>");
       // echo("data is insert");

    }
    else
    {
        echo("data is not insert");

    }
 }
?>