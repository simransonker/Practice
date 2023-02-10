<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];
$d=$_POST['num'];

$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");

$time=date("h:i:sa");
$datetime=$date." ".$time;

$conn=mysqli_connect("localhost","root", "","phpdb");
$sel="select * from registtbl where email='$b' or number='$d'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r);

if($k['2']!=$b)
{
    if($k['3']!=$d)
    {
        $ins="insert into registtbl (name,email,password,number,datetime) value('$a','$b','$c','$d','$datetime')";
    if(mysqli_query($conn,$ins))
    {
        ?>
        <script>
            alert("your data is store");
            window.location.href='signin.php';
            </script>
            <?php

        //  echo "data store";
    } 
    else
    {
        echo "data not store";

    }   
}
    else
    {
        echo "mobile number is already exits";
    }

    
 
}
else
{
echo "email id already exits";
}
?>
