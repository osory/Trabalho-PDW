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
    width: 800px;
    height: 400px;
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

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:100px 10px">
  <h1 class="w3-margin w3-jumbo">Jogos Recomendados</h1>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cyberpunk.jpg" alt="Cyberpunk">
    </div>
    <div class="carousel-item">
      <img src="images/tarkov.jpg" alt="Escape from Tarkov">
    </div>
    <div class="carousel-item">
      <img src="images/league.jpg" alt="League of Legends">
    </div>
    
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Novidades</h1>
      <h5 class="w3-padding-32">O lançamento distópico de Cyberpunk 2077</h5>

      <p class="w3-text-grey">Um dos videojogos mais esperados e importantes de 2020 chegou ao mercado e ergueu-se um coro de vozes críticas e descontentes. A CD Projekt Red tem em 2021 um ano para recuperar a sua reputação enquanto lida com uma comunidade desconfiada.</p>
      <a href="news.php">Read more...</a>
    </div>

    <div class="w3-third w3-center">
      <img src="images/news.jpg" alt="News" width="300" height="300">
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Sobre Nós</h1>

      <p class="w3-text-grey">Este trabalho foi desenvolvido para a disciplina de Plataformas de Desenvolvimento Web a pedido do professor Sebastião Pais.
      Nós somos alunos do curso de Informática Web na Universidade da Beira Interior. Temos como objetivo virarmos desenvolvedores profissionais, e neste momento estamos a tentar aprimorar várias técnicas e linguagens. Para isso desenvolvemos este projeto utilizando as linguagens PHP, HTML, um pouco de CSS, uma base de dados em MySQL e utilizamos ferramentas de bootstrap que encontramos na internet para melhorar este projeto. </p>
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