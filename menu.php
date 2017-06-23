<?php

include ('./config/connection.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css"/>
    <title>Menu</title>
  </head>
  <body>
    <header class="menu1">
           <?php
              include("includes/menu1.php");
             ?>
           </div>
  </header>
    <h1 class="accueil">Menus</h1>
    <div class="menu">
    <form method="POST" action="addmenu.php">
    <center>
    <input type="text" name="nom" size="20" value="nom" maxlength="35"><br>
    <input type="text" name="prix" size="20" value="euros" maxlength="35"><br>
    <select name="plat">
      <?php
      // On récupère tout le contenu de la table jeux_video
      $reponse = $bdd->query('SELECT * FROM plat');
      // On affiche chaque entrée une à une
      while ($donnees = $reponse->fetch())
      {
      ?>
      <option name="plat" value="<?php echo $donnees['id']; ?>"><?php echo $donnees['nom']; ?></option>

      <?php
      }
      ?>
    </select>


    <input type="submit" value="Envoyer" name="envoyer">
    </center>
    </form>
  </div>

  </body>
</html>
