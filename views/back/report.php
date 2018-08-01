<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p class="user">Utilisateur : <?= $_SESSION["user"]["pseudo"]; ?></p>
    <h2>Signalements</h2>
    <p>Commentaire(s) signalé(s) : <?= "\"".$param1['comment']."\" par ".$param1['author']." le ".$param1['deiz_cf']; ?></p><br />

    <p><a href="index.php?a=admin">Retour à la page d'accueil</a></p>
</div>