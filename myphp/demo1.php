<?php

// error_reporting(0)
    $a=$_POST['name'];
    echo $a;

    $b=$_POST['mob'];
    echo $b;

?>


<html>
    <head>

    </head>
    <body>
        <!-- get unsequre hai  -->

    <form action="code.php?flg=1" method="post">
        Name <input type="text" name="name"/><br>
        mobile<input type="number" name="mob"/><br>
        <button name="btn">Send</button>
    </form>
    </body>
</html>