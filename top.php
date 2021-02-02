<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<title>Gaming Blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.carousel-inner img {
    width: 50%;
    height: 50%;
  }
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="main.php" class="w3-bar-item w3-button w3-padding-large w3-white">Hey, <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
    <a href="news.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Notícias</a>
    <a href="top.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Jogos Populares</a>
    <a href="discussion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Discussões</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contactos</a>
    <a href="reset-password.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Alterar Password</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w6-content">
    <div class="w6-twothird" align="center">
      <h1>Cyberpunk 2077</h1>
      <img src="images/cyberpunk.jpg" alt="cyberpunk" width="500" height="300"><br><br>
      <a href="https://www.cyberpunk.net/bg/pt-br/"><button type="link" class="btn btn-primary btn-lb">Comprar</button></a>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w5-row-padding w3-light-grey w3-padding-64 w5-container">
  <div class="w6-content">
    <div class="w6-twothird" align="center">
      <h1>League of Legends</h1>
     <img src="images/league.jpg" alt="leagueoflegends" width="500" height="300"><br><br>
      <a href="https://play.euw.leagueoflegends.com/en_GB"><button type="link" class="btn btn-primary btn-lb">Download</button></a>
    </div>
  </div>
</div>

<!-- Third Grid -->
<div class="w5-row-padding w3-padding-64 w5-container">
  <div class="w6-content">
    <div class="w6-twothird" align="center">
      <h1>Escape From Tarkov</h1>
      <img src="images/tarkov.jpg" alt="tarkov" width="500" height="300"><br><br>
      <a href="https://www.escapefromtarkov.com/"><button type="link" class="btn btn-primary btn-lb">Comprar</button></a>
    </div>
  </div>
</div>

<!-- Fourth Grid -->
<div class="w5-row-padding w3-light-grey w3-padding-64 w5-container">
  <div class="w6-content">
    <div class="w6-twothird" align="center">
      <h1>Ghost of Tsushima</h1>
     <img src="images/ghost.jpg" alt="ghost" width="500" height="300"><br><br>
      <a href="https://www.playstation.com/pt-pt/games/ghost-of-tsushima/"><button type="link" class="btn btn-primary btn-lb">Comprar</button></a>
    </div>
  </div>
</div>

<!-- Fifth Grid -->
<div class="w5-row-padding w3-padding-64 w5-container">
  <div class="w6-content">
    <div class="w6-twothird" align="center">
      <h1>The Last of Us II</h1>
      <img src="images/last.png" alt="lastofus" width="500" height="300"><br><br>
      <a href="https://store.playstation.com/pt-pt/product/EP9000-CUSA10249_00-THELASTOFUSPART2"><button type="link" class="btn btn-primary btn-lb">Comprar</button></a>
    </div>
  </div>
</div>

<!-- Sixth Grid -->
<div class="w5-row-padding w3-light-grey w3-padding-64 w5-container">
  <div class="w6-content">
    <div class="w6-twothird" align="center">
      <h1>Assassin's Creed: Valhalla</h1>
     <img src="images/assassins.jpg" alt="assassins-creed" width="500" height="300"><br><br>
      <a href="https://www.ubisoft.com/en-gb/game/assassins-creed/valhalla"><button type="link" class="btn btn-primary btn-lb">Comprar</button></a>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Fábio Oliveira a40113 / Rodrigo Alexandre a40458 </h1>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>