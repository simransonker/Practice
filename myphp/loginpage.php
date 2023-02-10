<?php
  if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
    $password=$_POST['pass'];



    $conn=mysqli_connect("locahost","root","","phpdb");
    $ins="insert into reg2tbl(email,password) value('$email','$password')";
    if(mysqli_query($conn,$ins1))
    {
        
    }
  }
?>





<html>
    <head>

    </head>
    <body>
        <form action="" method="post">
            Email <input type="email" name="email"><br>
            Password <input type="text" name="pass"><br>
            <button namespace="submit">Submit</button>
        </form>
    </body>
</html>