<?php
session_start();
$conn=mysqli_connect("localhost","root","","phpdb");
if(!$conn)
{
    die("Database Connection Error - ".mysqli_connect_error() );
}

date_default_timezone_set("Asia/Kolkata");

// testing mode

$app_id="94132cc91b76de72d9e09f47123149";
$app_secret="4491f0b410da51ff330b9ae326a9e6d024280e7d";
$payment_api_url="https://sandbox.cashfree.com/";

// live mode

// $app_id="119766b27ab44b3a40a135d587667911";
// $app_secret="fa5caf4b81d22d024273f53d5f6a74f98cb98f65";
// $payment_api_url="https://api.cashfree.com";


?>