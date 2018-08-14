<div class="navbar">Utilisateur : <a href="index.php?a=tdb"><?= $_SESSION["user"]["pseudo"]; ?></a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres</h2>
    <div class="post">
        <p>
            <?php
            foreach ($param1 as $chap) { ?>
                <h3>
                    <?= htmlspecialchars($chap->getTitle()); ?> par <?= htmlspecialchars($chap->getAuthor());?> – <a href="index.php?a=aff&p=<?=htmlspecialchars($chap->getId());?>">Afficher</a>
                </h3>
                <?= mb_strimwidth($chap->getContent(), 0, 410);?>…
            <?php } ?>

        </p>
    </div>
    <p><a href="index.php?a=tdb">Tableau de bord admin</a>
</div>