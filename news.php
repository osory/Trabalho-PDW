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
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="main.php" class="w3-bar-item w3-button w3-padding-large w3-white">Hey, <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
    <a href="news.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">News</a>
    <a href="top.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Top Games</a>
    <a href="discussion.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Discussion</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact us</a>
    <a href="reset-password.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Reset Password</a>
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
  <div class="w3-content">

    <div class="w3-twothird">
      
      <h1>O lançamento distópico de Cyberpunk 2077</h1>

      <p class="w3-text-grey">Um dos videojogos mais esperados e importantes de 2020 chegou ao mercado e ergueu-se um coro de vozes críticas e descontentes. A CD Projekt Red tem em 2021 um ano para recuperar a sua reputação enquanto lida com uma comunidade desconfiada.
      Cyberpunk 2077 despertou a curiosidade e a imaginação dos jogadores muito antes de chegar ao mercado. Era uma das obras mais aguardadas em 2020 e será inequivocamente um dos títulos associados ao ano transacto. Infelizmente para a produtora CD Projekt Red (e para a comunidade de jogadores que esperou e desesperou pelo jogo), os motivos de tamanho destaque no pós-lançamento estão longe de serem homogéneos. 

      A aventura Role Playing Game que coloca o jogador na pele de V transporta-nos para Night City, metrópole que prometia liberdade para a exploração e um coração a bater em tons de néon. O entusiasmo era arrebatador, mesmo depois de o lançamento ter sido adiado diversas vezes — primeiro de Abril de 2020 para Setembro, depois para Novembro e, finalmente, em Outubro acabaria por ser adiado para o dia 10 de Dezembro. 

      Quando chegou ao mercado, Cyberpunk 2077 ficou disponível no PC, PlayStation 4, Stadia e Xbox One — as consolas da Sony e da Microsoft estão disponíveis em duas variantes: a PlayStation 4 e a PlayStation 4 Pro, a Xbox One e a Xbox One X, respectivamente; os modelos Pro e X têm mais capacidade tecnológica, sendo versões melhoradas dos modelos que chegaram originalmente ao mercado.

      Há relatos de erros sérios e momentos caricatos protagonizados pela obra da CD Projekt Red em todas as plataformas, mas é precisamente nos modelos originais das consolas que os jogadores estão a encontrar uma experiência de jogo bem diferente do que foi prometido — e mostrado — pela casa polaca. Aliás, o volume de queixas e o tom do descontentamento foi tal que a Sony e a Microsoft tiveram que reagir à situação.</p>
      <a href="https://www.publico.pt/2021/01/08/tecnologia/noticia/lancamento-distopico-cyberpunk-2077-1945521">Noticia</a>

    

   
    </div>

   
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">

    <div class="w3-twothird">
      <h1>BRINGING THE FESTIVAL TO LIFE</h1>
      <h5 class="w3-padding-32">A behind-the-scenes look at new arenas from Fates: Festival of Beasts</h5>

      <p class="w3-text-grey">Hey there, tacticians! The TFT team is excited to share with you what went on behind the scenes during the making of arenas for Fates: Festival of Beasts. From concept to execution, set 4.5 pushed the boundaries of what we can accomplish in TFT arenas. And of course, with that ambition came some unique challenges for environment artists, composers, and VFX artists alike. With the results, we hope to have opened up a whole new realm of possibilities for how you all experience a game of TFT. Keep on reading for the full story!
      Let’s get into it! Here’s Gino to introduce you to the concepts for 4.5 arenas.</p>

      <h5 class="w3-padding-32">Concept Design</h5>

      <p class="w3-text-grey">Going into set 4.5, we knew we wanted to celebrate the Lunar New Year with players. To do that, we had to make it a fun experience while remaining true to the traditions of the celebration. For a while we played with some traditional explorations of the theme, but we wouldn’t be TFT if we didn’t push it further. We took original arena concepts for a throne room and river village and dialed those up to 11. The throne room became a Chinese-inspired club (with our own adorable DJ), and the river village became a rooftop parade celebration, complete with hologram projections. The team was hyped about the idea; we knew this was the direction we wanted to go.

      Our next challenge was to convey all of our grand ideas while still accommodating TFT’s gameplay needs. The club needed to feel like a club on both PC and mobile, and the same went for the rooftop parade. This meant that any visual elements needed to be visible and interactive on all platforms without getting in the way of anything important, like items.</p>
      <a href="https://na.leagueoflegends.com/en-us/news/dev/bringing-the-festival-to-life/">Noticia</a>

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