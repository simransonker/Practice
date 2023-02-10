<?php

?>

<html>
    <head>
</head>
  <body>
    <form action="registcode1.php" method="post" enctype="multipart/form-data">
      <h1>New Student</h1>
        Name<input type="text" name="name"><br>
        Gender<input type="checkbox" name="gend" value="male">male
        <input
         type="checkbox" name="gend" value="Female">Female
        <br> 
        hobby
        <input type="checkbox" name="hobby[]" value="playing">playing
        <input type="checkbox" name="hobby[]" value="crafting">crafting
        <br>
        city <select name="city">
          <option value="lucknow">Lucknow</option><br>
          <option value="kanpur">kanpur</option><br>
          <option value="delhi">dehli</option><br>
        </select><br>
        Address<textarea name="add"></textarea><br>
        
        

        <button>save</button>
</form>
    <body>
    </html>
