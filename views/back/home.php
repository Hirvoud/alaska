<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p class="user">Utilisateur : <?= $_SESSION["user"]["pseudo"]; ?></p>
    <h2>Derniers chapitres</h2>
    <p><a href="index.php?a=add">Ajouter une entrée</a></p>
    <div class="post">
        <p>
            <?php
            foreach ($param1 as $chap) {
                echo    "<h3>" . htmlspecialchars($chap->getTitle()) . " par " . htmlspecialchars($chap->getAuthor()) . " – <a href='index.php?a=aff&p=". htmlspecialchars($chap->getId())."'>Afficher</a></h3><p>". htmlspecialchars(mb_strimwidth($chap->getContent(), 0, 410))."…</p>";
            }
            ?>
        </p>
    </div>
    <p><a href="index.php?a=deco">Déconnexion</a></p>
    <p><a href="index.php?a=tdb">Tableau de bord admin</a>
</div>