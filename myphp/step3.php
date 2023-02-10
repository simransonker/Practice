c<?php
if(isset($_POST['submit']))
{
    $idd=$_REQUEST['idd'];
    $picture=$_FILES['pic']['name'];
    $picturetemp=$_FILES['pic']['tmp_name'];

    $signature=$_FILES['sign']['name'] ;
    $signaturetemp=$_FILES['sign']['tmp_name'];

    $thumb=$_FILES['thumb']['name'];
    $thumbtemp=$_FILES['thumb']['tmp_name'];

    $date=date("d/m/y");
    date_default_timezone_set("asia/kolkata");
    $time=date("h:i:sa");
    $datetime=$date." ".$time;
    $path="images/";

    $conn=mysqli_connect("localhost","root","","phpdb");
    $up="update multipletbl set picture='$picture',signature='$signature',
    thumb='$thumb',dateandtime='$dateandtime' where id=$idd";
    if(mysqli_query($conn,$up))
    {
        move_uploaded_file($picturetemp,$path.$picture);
        move_uploaded_file($signaturetemp,$path.$signature);
        move_uploaded_file($thumbtemp,$path.$thumb);
         header("location:step4.php?idd=$idd");
    }
    else
    {
        echo "step3 date not uploade";
    }
}

?>

<html>
    <head>

    </head>
    <body>
     <h1>Step3 page </h1> 
     <form action="" method="post" enctype="multipart/form-data">
       picture <input type="file" name="pic"> <br>
       Signature <input type="file" name="sign"> <br>
       Thumb <input type="file" name="thumb"> <br>
       <button name="submit">Submit</button> 

     </form>     
    </body>
</html> 