<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mobile=$_POST['mob'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $date=date("d/m/y");
    date_default_timezone_set("asia/kolkata");
    $time=date("h:i:sa");
    $datetime=$date."".$time;
    $conn=mysqli_connect("localhost","root","","phpdb1");

    $ins="insert into reg1tbl(name,mobile,email,password,dateandtime) values('$name','$mobile','$email','$password','$datetime')";
    if(mysqli_query($conn,$ins))
    {
       $ins1="insert into reg2tbl(email,passwod) value('$email','$password')";
       if(mysqli_query($conn,$ins1))
       {
        header("location:loginpage.php");
       }
       else
       {
        echo "login data not store";
       }
    }
    else
    {
        echo"registration data not store";
    }
}

?>






<html>
    <head>

    </head>
    <body>
        
    <form action="" method="post">
    Name <input type="text" name="name"><br>
    Mobile <input type="number" name="mob"><br>
    email <input type="email" name="email"><br>
    Password <input type="text" name="pass"><br>
    <button name="submit">submit</button>    
</form>
    </body>
</html>