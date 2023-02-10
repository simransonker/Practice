<?php
if(isset($_POST['next']))
{
    $name=$_POST['name'];
    $mobile=$_POST['num'];
    $city=$_POST['city'];


// if(empty($name) or empty($mobile) or empty($city));
//    {
     
// }


    $conn=mysqli_connect("localhost","root","","phpdb");
        $ins="insert into multipletbl(name,mobile,city) values('$name','$mobile','$city')";
    if(mysqli_query($conn,$ins))
    {
        
        $idd=mysqli_insert_id($conn);
        header("location:step2.php?idd=$idd");

    }
    else
    {
        echo"step1 data not store";
    }
}
?>





<html>
    <head>

    </head>
    <body>
        <h1>Step1 Page</h1>
        <form action="" method="post">
            Name <input type="text" name="name"> <br/>
            Mobile <input type="number" name="num"> <br/>
            City <input type="text" name="city"><br/>
            <button name="next">Next</button>
        </form>
    </body>
</html>