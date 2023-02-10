<?php

 if(isset($_POST['btn']))
 {
    $a=$_POST['name'];
    echo $a;

    $b=$_POST['mob'];
    echo $b;
 }
?>


<html>
    <head>

    </head>
    <body>
        <!-- get unsequre hai  -->

    <form action="" method="post">
        Name <input type="text" name="name"/><br>
        mobile<input type="number" name="mob"/><br>
        <button name="btn">Send</button>
    </form>
    </body>
</html>