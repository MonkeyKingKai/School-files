<?php
include("phpincludes.php");

$result=mysqli_query($mysqli, "SELECT * from fighters2 ORDER BY Winss ASC")
 
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
    <form action="show.php " method="POST">
  Name<input type="text" name='name'><br>
  Wins <input type= "Wins" name='winss'><br>
  Losses <input type="Losses" name='losee'> <br>
  <input type="submit" name="submit">
</form>

</html> 