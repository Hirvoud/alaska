<div class="navbar"><?= $_SESSION["user"]["pseudo"]; ?> : <a href="index.php?a=tdb">Tableau de bord</a> − <a href="index.php?a=deco">Déconnexion</a></div>
    <div class="col-lg-9">
    <header class="jumbotron">
        <h1>Billet simple pour l'Alaska</h1>
    </header>
    <h2>Derniers chapitres</h2>
    <div class="post">
        <p>
            <?php
            foreach ($param1 as $chap) { ?>
                <div class="col-lg-4" style="min-height:310px; text-align:justify;">
                    <h3>
                        <a href="index.php?a=aff&p=<?=htmlspecialchars($chap->getId());?>"><?= htmlspecialchars($chap->getTitle()); ?> <small>par</small> <?= htmlspecialchars($chap->getAuthor()); ?></a>
                    </h3>
                    <?= mb_strimwidth($chap->getContent(), 0, 410);?>…
                </div>
            <?php } ?>

        </p>
    </div>
            </div>
    <div class="col-lg-3">
    <h2>Derniers commentaires</h2>
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
    </div>
</div>