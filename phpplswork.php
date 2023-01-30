
<?php
include("config.php");
if(isset($_POST['submit']))
{
$name=$_POST['fightername'];
$Wins=$_POST['fighterwins'];
$Lose=$_POST['fighterlosses'];

$result = mysqli_query($mysqli,"INSERT INTO fighters2 (Namee,Winss,Losses) values('$name','$Wins','$Lose') ");

if($result)
{
    echo "Success";
}
else{
    echo "Failed";
}
}
?>
