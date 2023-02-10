<?php
$a=$_POST['name'];
echo $a;
$b=$_POST['Fname'];
echo $b;
$c=$_POST['Mname'];
echo $c;
$d=$_POST['email'];
echo $d;
$e=$_POST['pass'];
echo $e;
$conn=mysqli_connect("localhost","root", "", "phpdb");

if(!$conn)
{
    echo "conn faild";

}
else
{
    echo "conn ok";
}
$ins="insert into tb1(name,Fname,Mname,email,password) value('$a','$b','$c','$d','$e')";
if(mysqli_query($conn,$ins))
{
    ?>
    <script>
        alert("your data is store");
        window.localhost.href='prog1.php';</script>
        <?php
}
else
{
    // echo "data not store";
}

?>