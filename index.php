<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="source.css" />
  <script type="text/javascript" src="script1.js"></script>
  <title>Luxanna</title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li class="menu">
          <a href="#">Home</a>
        </li>
        <li class="menu-deroulant">
          <a href="#">A Venir</a>
          <ul class="sous-menu">
            <li><a href="#AboutMe">About Me</a></li>
            <li><a href="#Planning">Planning</a></li>
            <li><a href="#ToDoList">To Do List</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <input id="searchbar" onkeyup="searching()" type="text"
        name="search" placeholder="Search...">
  <main>
    <div class="page">
      <h2 class="titre" id="AboutMe">About Me :</h2>
      <p class="Mee">
        Hey there :)
        To introduce myself, I'm a human who get bored often so I make things... </br>
        My "things" are still... not that great, but I'm working on it ^^ </br>
        You can still check any time you want to see how things going, generally I don't give up my projects without
        finishing them, and this page is one of my projects ;) </br>
        I have a lot of other projects that I may post somewhere here (or on my GitHub) to show you :3 </br>
        It's going to be an incredible page trust me !
      </p>
    </div>
    <div class="page">
      <h3 class="titre" id="Planning">Planning :</h3>
      <table>
        <caption id="DateDuJour">Semaine du </caption>
        <thead>
          <tr id="semaine">
            <td>LUNDI </td>
            <td>MARDI </td>
            <td>MERCREDI</td>
            <td>JEUDI </td>
            <td>VENDREDI</td>
            <td>SAMEDI </td>
            <td>DIMANCHE</td>
          </tr>
        </thead>
        <tr>
          <td>zzz</td> <!-- Lundi-->
          <td>zzz</td> <!-- Mardi -->
          <td>zzz</td> <!-- Mercredi -->
          <td>zzz</td> <!-- Jeudi -->
          <td>zzz</td> <!-- Vendredi -->
          <td>zzz</td> <!-- Samedi -->
          <td>zzz</td> <!-- Dimanche -->
        </tr>
        <tr>
          <td>zzz</td> <!-- Lundi-->
          <td>zzz</td> <!-- Mardi -->
          <td>zzz</td> <!-- Mercredi -->
          <td>zzz</td> <!-- Jeudi -->
          <td>zzz</td> <!-- Vendredi -->
          <td>zzz</td> <!-- Samedi -->
          <td>zzz</td> <!-- Dimanche -->
        </tr>
      </table>
    </div>
    <div class="page">
      <h4 class="titre" id="ToDoList">To Do List :</h4>
      <ul class="list">
        <form action="" method="POST">
          <li>Drink coffee</li>
          <?php
          include("main.php");
          ?>
          <li><input type="text" name="list" autocomplete="off" id="listee"/></li>
        </form>
      </ul>
    </div>
  </main>
  <footer>
    <div class="uwu">
      <p>Follow me on my socials UwU </p>
    </div>
    <div class="reseaux">
      <a href="https://twitter.com/Luxaannaa"><img src="ignore/iconeTwitter.PNG"></a>
      <a href="https://instagram.com/Luxanna_uwu"><img src="ignore/iconeInsta.PNG"></a>
      <a href="https://github.com/inatey"><img src="ignore/iconeGithub.PNG"></a>
    </div>
    <div class="recom">
      <p>Any Recommandations to improve my project ? Tell me !</p>
      <div class="blockNamOpi">
        <form action="" method="get">
          <div class="namOpi">
            Name : <input type="text" name="name" id="name" autocomplete="off"/>
          </div>
          <div class="namOpi">
            Opinion : <input type="text" name="opinion" id="opinion" autocomplete="off"/>
            <input type="submit" id="button">
          </div>
      </div>
      <?php if (isset($_GET["name"])) {
        echo "<div class=\"wow\"> Thank you " . $_GET["name"] . " for sharing your opinion ^^</div>";
        extract($_REQUEST);
        $file = fopen("Save.txt", "a");
        fwrite($file, "Name : $name \n Opinion : $opinion \n");
        fclose($file);
      }
      ?>
      </form>

    </div>
  </footer>

</body>

</html>