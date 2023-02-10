<?php
require("config.php");
$txnid=$_SESSION["txnid"];

$order_id=$_REQUEST["order_id"];
$order_token=$_REQUEST["order_token"];

// handle payment response

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $payment_api_url.'/pg/orders/'.$order_id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'x-api-version: 2021-05-21',
    'x-client-id: '.$app_id,
    'x-client-secret: '.$app_secret
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$newresponse=json_decode($response);

$order_status=$newresponse->order_status;
$payment_link=$newresponse->payment_link;

$update="update orders set paymentstatus='$order_status', paymentresponse='$response' where txnid='$order_id' ";

if(mysqli_query($conn,$update))
{
    if($order_status=="PAID")
    {
        header("location: thankyou.php");
    }
    else
    {
        echo "Order Not Completed. Something went wrong.";
        echo "<br/>";
        echo "Retry for payment again: <a href='".$payment_link."' >Click here</a>";
        echo "<hr/>";
        echo "Order again: <a href='cart.php' >Click here</a>";
    }
}
else
{
    echo "Something went wrong.";
}


?>