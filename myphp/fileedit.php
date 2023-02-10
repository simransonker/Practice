<?php
$editeid=$_REQUEST['ids'];
echo $editeid;
$conn=mysqli_connect("localhost","root","","phpdb");
$sel="select * from filetbl4 where id='$editeid'";
$query=mysqli_query($conn,$sel);
$fetch=mysqli_fetch_array($query);
// echo "<pre>";
// var_dump($fetch);

?>
<html>
    <head>
</head>
<body>
    <form action="fileupdate.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $fetch['0'] ?>"/>
        <img src="image/<?php echo $fetch['1']?>" height="100px" width="100px" alt=""> <br>
        <input type="file" name="img"><br>
        <button>Save</button>
        <!-- echo"<script>window.location.href='fileshow.php';alert('data store')</script>"; -->
</form>
</body>
    </html>