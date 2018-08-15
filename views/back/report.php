<div class="navbar"><?= $_SESSION["user"]["pseudo"]; ?> : <a href="index.php?a=tdb">Tableau de bord</a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <header class="jumbotron">
        <h1>Billet simple pour l'Alaska</h1>
    </header>
    <h2>Signalements</h2>
    <p>Commentaire(s) signalé(s) : <?= "\"".$param1['comment']."\" par ".$param1['author']." le ".$param1['deiz_cf']; ?></p><br />

    <p><a href="index.php?a=acc">Retour à la page d'accueil</a></p>
</div>