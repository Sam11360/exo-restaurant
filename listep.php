<?php
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM plat');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<p>Le plat:</p>

    <?php echo $donnees['nom']; ?><br/>
    Prix:
    <?php echo $donnees['prix']; ?>
    Euros<br/></em>

<?php
}
?>
