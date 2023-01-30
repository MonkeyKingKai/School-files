<?php
include_once "phpincludes.php";
if($conn->connect_error){
    die("Connection Lost ".$conn->connect_error);
}
?>
<!DOCTYPE>
<html>
<head>
<title>take in data</title>
<?php
$Name = $_POST['Name'];
$Wins = $_POST['wins'];
$Lose = $_Post['losses']
?>
</head>
<body style="margin: 50px;">
  <h1>UFC lightweight division</h1>
  <br>
  <table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Wins</th>
        <th>Losses</th>
        </tr>
    </thead>
<tbody>

    <?php

$sql = "INSERT INTO  fighters (Namn, Wins,Lose) VALUES ('$Name', '$Wins','$Lose')";


if($conn->query($sql) === TRUE){
    echo "The values were saved perfectly give me an A pls";
}
else{
    echo "It did not save the values in the table, still give me an A".$conn->error;
}


    ?>
    <h1>Take in Data</h1>
    <p>You wrote <?php echo $Name; ?></p>
<?php

$sql = "SELECT Namn, Wins, Lose FROM fighters; ";
$result = $conn->query($sql);

if(!$result){
  die("Invalid query: "  . $conn->error);
  }
  while($row = $result-> fetch_assoc()){
      echo "<tr>
      <td> ". $row['Name']."</td>
      <td>". $row['wins']."</td>
      <td>". $row['losses']."</td>
      <td>
      
      </td>
      </tr>";
  }

else{
  echo "Table is empty.";
}
$conn->close();
?>
</body>    
</html>