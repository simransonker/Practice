<?php
   $name=$_POST['name'];
   $gender=$_POST['gend'];
   $hobbies=implode(' , ',$_POST['hobby']);
   $city=$_POST['city'];
   $address=$_POST['add'];
  
$conn=mysqli_connect("localhost","root","","phpdb");
if(!$conn)
{
    echo("Something went wrong!");
}
else
{
    $insert = "insert into regtbl(name,gender,hobby,city,address) values('$name','$gender','$hobbies','$city','$address')";

    if(mysqli_query($conn,$insert))
    {
    //  echo("<script>window.location.href='register.php'; alert('Data Insert!')</script>");
    //   header("location:register.php?msg=success");
        header("location:register.php");
        // echo("data is  insert");
    }
    else
        
    {
       // echo("data is not insert");

       // echo("<script>window.location.href='register.php'; alert('Data is not storet!')</script>");
      // header("location:register.php?msg=failed");
        header("location:register.php");
    }
}

?>