<?php
$name=$_POST['name'];
$mobile=$_POST['mob'];
$gender=$_POST['gend'];
$email=$_POST['email'];
// echo $mobile;
// die();x
$conn=mysqli_connect("localhost","root","","phpdb");
if(!$conn)
{
    echo("Something went wrong!");


}
else
{


$insert="insert into currenttable(name,mobile,gender,email) values('$name','$mobile','$gender','$email')";

if(mysqli_query($conn,$insert))

{
    ?>
   <script>
    alert('data insert');
    window.location.href='showco.php';
   </script>
    <?php
    //echo ("data is insert");
}
else
{
    echo("data is not insert");
}
}

?>