<?php
if(isset($_POST['next']))
{
    $idd=$_REQUEST['idd'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $gender=$_POST['gend'];
    $conn=mysqli_connect("localhost","root","","phpdb");

    $up="update multipletbl set email='$email',password='$password',gender='$gender' where id=$idd";
    if(mysqli_query($conn,$up))
    {
       
        header("location:step3.php?idd=$idd");
    }
    else
    {
       
        echo "step2 data not store";

    }
}

?>


<html>
    <head>

    </head>
    <body>
        <h1>step2 page</h1>
        <form action="" method="post">
            Email <input type="email" name="email"> <br/>
            password <input type="password" name="pass"> <br/>
            gender <input type="radio" name="gend">Male
            <input type="radio" name="gend">Female <br/>
            <button name="next">Next</button>
        </form>
    </body>
</html>
