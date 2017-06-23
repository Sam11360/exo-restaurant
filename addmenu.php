<?php

include ('./config/connection.php');
$req = $bdd->prepare('INSERT INTO menu (nom, prix, plat) VALUES(?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prix'], $_POST['plat']));
// On récupère tout le contenu de la table menu
$reponse = $bdd->query('SELECT * FROM menu');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<p>Le menu:</p>

    <?php echo $donnees['nom']; ?><br/>
    Prix:
    <?php echo $donnees['prix']; ?>
    Euros<br/></em>

<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
