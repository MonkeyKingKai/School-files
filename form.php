<?php
if(isset($_POST['submit'])){
    $player1 = $_POST['Player1'];
    $player2 = $_POST['Player2'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'game';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO players(Player1,Player2) values ('$player1', '$player2')";
    mysqli_query($conn,$sql);
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Login</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="box">
        <div class="form">
        <form action="#" method="POST">
            <h2>Enter Player Names</h2>
            <div class="inputbox">
                <input type="text" name="Player1" required='required'>
                <span>Player1 name</span>
                <i></i>
                   </div>          
                <div class='inputbox'>
                <input type="text"  name="Player2" required='required'>
                <span>Player2 name</span>
                <i></i>
            </div>
            
                   <input type="submit" name="submit" value="Sign in">  
                   <a href="gameindex.html" class='btn'>Play</a>

            </form>
        </div>
        
    </div>
</body>
</html>

