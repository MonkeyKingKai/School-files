<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>please work for hte love of jesus christ</title>
</head>
<link rel = "stylesheet" href ="voting.css">
<body>
    <div class = "filler">


    </div>
    <table>
        <tr>
<th>ID</th>
<th>HeavyWeight</th>
<th>Middleweight</th>
<th>Lightweight</th>
        </tr>
  
    <?php
     $conn = mysqli_connect('localhost', 'root', '','voting');

        $sql = "SELECT * FROM votefighters";
    
    

    $result = $conn->query($sql);

    if($result->num_rows >= 0){
        while($row = $result-> fetch_assoc())  {
            echo "<tr><td>" .$row["id"]."</td><td>".$row["heavyweight"]."</td><td>".$row["middleweight"]."</td><td>".$row["lightweight"]."</td></tr>";

            
            
        }
    }
    else {
        echo "No results yet";
    }
    $conn->close();
?>
  </table>
</body>
</html>