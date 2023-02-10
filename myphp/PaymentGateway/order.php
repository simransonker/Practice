<?php

require("config.php");

$idd=$_POST['idd'];
$sel="select * from multipletbl where id=$idd";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);


$name=$k['1'];
$mobile=$k['2'];
$email=$k['4'];
$address=$k['3'];
$paymentmode=$_POST["paymentmode"];
$totalpayment=$_POST["payment"];

$paymentstatus="Pending";
$date=date("d-m-Y");
$time=date("h:i:s a");
$paymentresponse="NA";
$txnid=date("Ymdhis").rand(100000,999999);

$cmd="INSERT INTO `orders`(`name`, `mobile`, `email`, `address`, `paymentmode`, `totalpayment`,
`paymentstatus`, `paymentresponse`, `txnid`, `date`, `time`)
 VALUES ('$name','$mobile','$email','$address','$paymentmode','$totalpayment','$paymentstatus','$paymentresponse','$txnid','$date','$time')";

if(mysqli_query($conn,$cmd))
{
    echo "Data Inserted";

    if($paymentmode=="ONLINE")
    {
        $_SESSION["txnid"]=$txnid;
        
        header("location:paymentprocess.php");

    }
    else
    {
        header("location:thankyou.php");
    }

}
else
{
    echo "Something went wrong!";
}
?>