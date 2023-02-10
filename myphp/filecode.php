<?php
   $file_name=$_FILES['img']['name'];
   echo $file_name;

   $temp_name=$_FILES['img']['tmp_name'];

   $file_size=$_FILES['img']['size'];

   $file_type=$_FILES['img']['type'];

   $date=date("d/m/y");
   date_default_timeZone_set("asia/kolkata");

   $time=date("h:i:sa");

   $datatime=$date." ".$time;
   $path ="image/";
   

   $conn = mysqli_connect("localhost","root","","phpdb");
   if(!$conn)
   {
      echo "failed";
   }

    $ins="insert into filetbl4  (files,date_name) values('$file_name','$date')";
   if(mysqli_query($conn,$ins))
   {
      move_uploaded_file($temp_name,$path.$file_name);
      //echo "data store";
      echo "<script>window.location.href='fileshow.php';alert('data store')</script>";
   }
   else{
      echo "data not stores";
   }

?>