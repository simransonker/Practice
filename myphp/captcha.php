<?php
$a=rand(10,99);
$b=rand(65,98);
$c=chr($b);
$d=rand(65,90);
$e=chr($d);
$f=rand(97,122);
$g=chr($f);
$h=rand(1,9);


// echo $a.$c.$e.$g.$h;
?>

<input type="text" value="<?php echo $a.$c.$e.$g.$h?>" readonly/>