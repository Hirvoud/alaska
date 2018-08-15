<div class="navbar"><?= $_SESSION["user"]["pseudo"]; ?> : <a href="index.php?a=tdb">Tableau de bord</a> − <a href="index.php?a=deco">Déconnexion</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres</h2>
    <div class="post">
        <p>
            <?php
            foreach ($param1 as $chap) { ?>
                <div class="col-lg-4" style="min-height:300px; text-align:justify;">
                    <h3>
                        <?= htmlspecialchars($chap->getTitle()); ?> par <?= htmlspecialchars($chap->getAuthor());?> – <a href="index.php?a=aff&p=<?=htmlspecialchars($chap->getId());?>">Afficher</a>
                    </h3>
                    <?= mb_strimwidth($chap->getContent(), 0, 410);?>…
                </div>
            <?php } ?>

        </p>
    </div>
    <p>Derniers commentaires</p>
    <div class="comms">
        <?php
        foreach ($param2 as $comm) { ?>
                <div class="comm">
                    <h4>
                        <?= htmlspecialchars($comm->getAuthor()); ?>
                    </h4>
                    <a href="index.php?a=aff&p=<?= htmlspecialchars($comm->getPostId()); ?>"><?= mb_strimwidth($comm->getComment(), 0, 100); ?>…</a>
                </div>
            <?php 
        } ?>
    </div>
    <p><a href="index.php?a=tdb">Tableau de bord admin</a>
</div>