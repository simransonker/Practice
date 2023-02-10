<html>

<head>

</head>

<body>

    <h1> Your Cart </h1>

    <table border="1" cellpadding="10" cellspacing="5">
        <tr>
            <th>Sr. NO.</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
        </tr>

        <tr>
            <td> 1 </td>
            <td> <img src="images/keyboard1.jpg" style="height:100px;" /> </td>
            <td> Gaming Keyboard </td>
            <td> Rs. 900/- </td>
        </tr>

        <tr>
            <td> 2 </td>
            <td> <img src="images/mouse1.jpg" style="height: 100px;" /> </td>
            <td> Gaming Mouse </td>
            <td> Rs. 1200/- </td>
        </tr>

        <tr>
            <td> 3 </td>
            <td> <img src="images/monitor1.jpg" style="height: 100px; " /> </td>
            <td> Monitor </td>
            <td> Rs. 5000/- </td>
        </tr>

    </table>

    <br /><br />

    <form method="post" action="order.php">
        Enter Your Name
        <input type="text" name="name" />

        <br /><br />

        Enter Your Mobile Number
        <input type="number" name="mobile" />

        <Br /><br />

        Enter Your Email ID
        <input type="email" name="email" />

        <br /><br />

        Enter Your Address
        <textarea name="address"></textarea>

        <br /><br />

        Payment Mode
        <input type="radio" name="paymentmode" value="COD" /> COD
        <input type="radio" name="paymentmode" value="ONLINE" checked /> ONLINE

        <br /><Br />

        Total Payment (INR)
        <input type="number" name="totalpayment" value="10" readonly />

        <br /><br />

        <button>Order Now</button>

    </form>


</body>

</html>