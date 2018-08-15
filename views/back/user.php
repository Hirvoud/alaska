<div class="navbar"><?= $_SESSION["user"]["pseudo"]; ?> : <a href="index.php?a=tdb">Tableau de bord</a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p class="user">Bienvenue, <?= $_SESSION["user"]["pseudo"]; ?>.</p>
    <h2>Tableau de bord d'utilisateur</h2>
    <p>Vos commentaires</p>
    <?php foreach ($param1 as $comm ) { ?>
        <p><?= $comm->getComment();?> − <a href="index.php?a=modC&p=<?= $comm->getId(); ?>">Modifier</a></p>
    <?php } ?>
    <p><a href="index.php?a=acc">Retour à l'accueil</a>
    <p><a href="index.php?a=delA&p=<?= $_SESSION["user"]["pseudo"]; ?>">Supprimer votre compte</a></p>
</div>