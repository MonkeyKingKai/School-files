<?php
if(isset($_POST["vote"])){
    if(empty($_POST["heavyweight"]) || empty($_POST["middleweight"]) || empty($_POST["lightweight"])){
    echo
    "
    <script>
    alert('Invalid');
    document.location.href = '';
    </script>
    ";
}
else{
    $heavyweight = $_POST["heavyweight"];
    $middleweight = $_POST["middleweight"];
    $lightweight = $_POST["lightweight"];

    $conn = mysqli_connect("localhost", "root", "","voting");

    $query = "INSERT INTO votefighters VALUES ( '','$heavyweight','$middleweight', '$lightweight')";
    mysqli_query($conn, $query);
echo
     "
    <script>
    alert('Vote Successful');
    document.location.href = '';
    </script>
    ";
}
}
?>
<!DOCTYPE html>
<html lang = "en" dir="ltr">
<head>
<meta charset = "utf-8">
<title>Voting Form</title>
<link rel = "stylesheet" href ="styles.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
</script>
<body>
    

    </div>
    <div class ="container">
        <h1>Best Heavyweight Fighter</h1>
       <div class="option-wrapper">
       <div class= "option-group">
      <img src="francis.png" alt="">
      <button class="option-btn btn-heavyweight" value="Francis Ngannou">Francis Ngannou</button>
      

       </div>
        <div class= "option-group">
      <img src="stipe hw.png" alt="">
      <button class="option-btn btn-heavyweight" value="Stipe miocic">Stipe miocic</button>

       </div>

       </div>
 <h1>Best Middleweight Fighter</h1>
<div class="option-wrapper">
<div class= "option-group">
     <img src="israel.png" alt="">
     <button class="option-btn btn-middleweight" value="Israel Adesanya">Israel Adesanya</button>
 </div>

 <div class= "option-group">
      <img src="WHITTAKER_ROBERT_09-03.png" alt="">
      <button class="option-btn btn-middleweight" value="Robert Whittaker">Robert Whittaker</button>

       </div>
    </div>
    <h1> Best LightWeight Fighter</h1>
    <div class ="option-wrapper">
    <div class= "option-group">
      <img src="connor.png" alt="">
      <button class="option-btn btn-lightweight" value="Connor Mcgreggor">Connor Mcgreggor</button>

       </div>
       <div class= "option-group">
      <img src="charles lw.png" alt="">
      <button class="option-btn btn-lightweight" value="Charles Olivera">Charles Olivera</button>

    </div>
</div>
<a href="voteresults.php" target="_blank">
<button class="btn-submit">See Vote Results</button>
</a>
    <form class="" action="" method="POST">
    <input type="hidden" name='heavyweight' id="heavyweight">
    <input type="hidden" name='middleweight' id="middleweight">
    <input type="hidden" name='lightweight' id="lightweight">
    <button type="submit" name="vote" class = "btn-submit">Vote</button>

    


    </form>
    </div>
<script type="text/javascript">
$(function(){
$('.btn-heavyweight').click(function(){
$('btn-heavyweight').removeClass('active').addClass('inactive');
$(this).removeClass('inactive').addClass('active');
});
$('.btn-middleweight').click(function(){
$('btn-middleweight').removeClass('active').addClass('inactive');
$(this).removeClass('inactive').addClass('active');
});
$('.btn-lightweight').click(function(){
$('btn-lightweight').removeClass('active').addClass('inactive');
$(this).removeClass('inactive').addClass('active');
});

$('.btn-heavyweight').click(function(){
var clickedOption = $(this).attr('value');
$('#heavyweight').val(clickedOption);
});
$('.btn-middleweight').click(function(){
var clickedOption = $(this).attr('value');
$('#middleweight').val(clickedOption);
});
$('.btn-lightweight').click(function(){
var clickedOption = $(this).attr('value');
$('#lightweight').val(clickedOption);
});
});
</script>
</body>



</html>