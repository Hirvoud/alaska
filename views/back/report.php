<div class="navbar">Utilisateur : <a href="index.php?a=tdb"><?= $_SESSION["user"]["pseudo"]; ?></a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Signalements</h2>
    <p>Commentaire(s) signalé(s) : <?= "\"".$param1['comment']."\" par ".$param1['author']." le ".$param1['deiz_cf']; ?></p><br />

    <p><a href="index.php?a=acc">Retour à la page d'accueil</a></p>
</div>