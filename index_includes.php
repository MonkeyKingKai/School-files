<?php
include_once "phpincludes.php"
?>
<!DOCTYPE html>
<html>  
<head>
    <title> php site  </title>
</head>

<body>
<h1>php site</h1>
<?php

if($conn->connect_error){
  die("Connection Lost ".$conn->connect_error);

}

$sql = "Select guestName, content FROM entries; ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo "guestName: ".$row["guestName"]. "content: ".$row["content"].
    "<br>";
  }
}
else{
  echo "Table is empty.";
}

$sql = "INSERT INTO  entries (guestName, content) VALUES ('Ker', 'Ker is Here')";


if($conn->query($sql) === TRUE){
    echo "The values were saved perfectly give me an A";
}
else{
    echo "It did not save the values in the table, still give me an A".$conn->error;
}

$conn->close();
?>

</body>

</html>

