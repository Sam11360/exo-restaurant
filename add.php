<?php

include ('./config/connection.php');
$req = $bdd->prepare('INSERT INTO plat (nom, prix, image) VALUES(?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prix'], $_POST['image']));


header('Location: plat.php'); 

$reponse->closeCursor(); // Termine le traitement de la requête
?>
