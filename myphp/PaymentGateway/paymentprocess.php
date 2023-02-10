<?php
require("config.php");
$txnid=$_SESSION["txnid"];

$select="select * from orders where txnid='$txnid' ";
$result=mysqli_query($conn,$select);

$row=mysqli_fetch_array($result,MYSQLI_BOTH);

// Create Payment Gateway Order 

$postData='{
    "order_id": "'.$txnid.'",
    "order_amount": '.(int)$row["totalpayment"].',
    "order_currency": "INR",
    "customer_details": {
      "customer_id": "'.$row["id"].'",
      "customer_name": "'.$row["name"].'",
      "customer_email": "'.$row["email"].'",
      "customer_phone": "'.$row["mobile"].'"
    },
    "order_meta": {
        "return_url": "http://localhost/myphp/PaymentGateway/paymentresponse.php?order_id={order_id}&order_token={order_token}"
    }
  }';


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $payment_api_url.'/pg/orders',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$postData,
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
$paymentlink=$newresponse->payment_link;

header("location:$paymentlink");

?>