<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "forum");

    $errors = "";
    $poster = $_SESSION["username"];
    $post_title = htmlspecialchars($_POST["title"]);
    $post_desc = htmlspecialchars($_POST["desc"]);

    if(empty($post_title) or empty($post_desc)) {
      $errors = "Invalid inputs!";
    } else {

      $query = mysqli_query($conn, "SELECT post_title FROM posting WHERE post_title='$post_title';");
      $data = mysqli_fetch_assoc($query);


      if(!is_null($data["post_title"])) {
        $errors = "O titulo já existe!";
      } else {
      $query = mysqli_query($conn, "INSERT INTO posting (poster, post_title, post_desc) VALUES ('$poster', '$post_title', '$post_desc');");

      if($query) {
        header("Location: main.php");
      } else {
        echo "nao";
      }

    }

  }
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
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <img src="images/forum.png" alt="News" width="300" height="300">
    </div>

    <div class="w3-twothird">
      <h1>Tópicos dos Utilizadores</h1>
      <?php
      $conn = mysqli_connect("localhost", "root", "", "forum");

      $query = mysqli_query($conn, "SELECT post_title, poster FROM posting;");
      

      while($data = mysqli_fetch_assoc($query)) {
        echo "<h1><a href='show.php?title=".$data["post_title"]."'>".$data["post_title"]."</a> <sub> by ".$data["poster"]."</sub></h1><br><br>"; 
      }
      ?>
    </div>
  </div>
</div>



<!-- Second Grid -->

<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
     <h1>Criar um novo post</h1>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
          <label class="control-label" for="title">Título</label>
          <input type="text" class="form-control" name="title" placeholder="Escreva aqui o título"><br>
        </div>

        <div class="form-group">
          <label class="control-label" for="desc">Descrição do Post</label>
          <textarea name="desc" class="form-control" rows="25" cols="50" placeholder="Escreva aqui a descrição do post"></textarea><br>
        </div>
        <input type="submit" class="btn btn-primary btn-lg"   value="Submeter">
      </form>
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