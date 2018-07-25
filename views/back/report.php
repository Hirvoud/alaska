<?php 
session_start();
if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] !== "Jean Forteroche" ) { 
    header("Location: index.php?a=err&p=denied");
}
?>

<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p class="user">Utilisateur : <?= $_SESSION["pseudo"]; ?></p>
    <h2>Signalements</h2>
    <p>Commentaire(s) signalé(s) : <?= "\"".$param['comment']."\" par ".$param['author']." le ".$param['deiz_cf']; ?></p><br />

    <p><a href="index.php?a=admin">Retour à la page d'accueil</a></p>
</div>