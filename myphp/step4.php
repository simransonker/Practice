<?php
$capt=rand(10000,90000);
$idd=$_REQUEST['idd'];

?>
<html>
    <head>

    </head>
    <body>
        <h1>Payment Gateway Page</h1>
        <form action="PaymentGateway/order.php" method="post">
            <input type="hidden" name="idd" value="<?php echo $idd ?>"/>
            <input type="text" value="<?php echo $capt ?>" readonly name="captcha"><br>
            Enter Above Captaha* <input type="text" name="captha1"><br>
            Amount Type <select name="paymentmode" id="">
                <option>ONLINE</option>
                <option>CASH</option>
            </select><br>
            Amount* <input type="number" value="500" name="payment" readonly/><br>
             <button>Please Pay</button>
        </form>
    </body>
</html>