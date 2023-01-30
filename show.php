<?php
include_once "phpincludes.php";
if($conn->connect_error){
    die("Connection Lost ".$conn->connect_error);
}

$Name = $_POST['namee'];
$Wins = $_POST['winss'];
$Lose= $_POST['losee'];
?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content ="IE=edge">
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <title>Lightweight fighters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

<body style="margin: 50px;">

<form action="show.php" method="POST">

     
<input type="text" class="form-control" placeholder="Fighters name" name ='namee'> <br>
<input type="int" class="form-control" placeholder="Fighters wins"  name ='winss'> <br>
<input type="int" class="form-control" placeholder="Fighters losses" name= 'losee'> <br>
</div>

<input type="submit" name="submit" value="Save"> 
</form>
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
$sql = "INSERT INTO  fighters('Namn','Wins','Lose') VALUES ('$Name', '$Wins','$Lose')";

if($conn->query($sql) === TRUE){
  echo "The values were saved perfectly give me an A pls";
}
else{
  echo "It did not save the values in the table, still give me an A".$conn->error;
}


  

  $sql =  "SELECT Namn,Wins,Lose FROM fighters";
  $result = $conn->query($sql);
  
    if(!$result){
        die("Invalid query: "  . $conn->error);
        }
        while($row = $result-> fetch_assoc()){

          echo "<tr>
            <td> ".$row['namee']."</td>
            <td>  ".$row['winss']."</td>
            <td> ".$row['losee']."</td>
            <td>
            
            </td>
            </tr>";

        
        }
    
        $conn->close();
        
      


?>
</tbody>

  </table>  
</body>
</html>