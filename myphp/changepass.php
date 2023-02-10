<?php
session_start();
$sesid=$_SESSION['user'];

if(!isset($_SESSION['user']))
{
    header("location:signin.php");
}
?>


<html>
    <head>

    </head>
    <body>
        <h1>Change Password</h1>
        <form action="changepasscode.php" method="post">
            old password <input type="password" name="opass"><br>
            New password <input type="password" name="npass"> <br>
            Confirm Password <input type="password" name="cpass"><br>
            <button>Change</button> 
        </form>
    </body>
</html>