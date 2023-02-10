<?php
   session_start();
   $conn=mysqli_connect("localhost","root","","phpdb");
   $date=date("d/m/y");
   $time=date("h:i:sa");
   $datetime=$date," ",$time;

   $flag=$_REQUEST['flg'];

   switch($flag)
   {
    //registration code start
    case 1:
        $a=$_POST['name'];
        echo $a;
        $b=$_POST['mob'];
        echo $b;
        break;

        //registration code end

        //login code start

        case 2:

            break;
            //login code end
   }

?>