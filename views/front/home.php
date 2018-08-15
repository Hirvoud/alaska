<div class="navbar"><a href="index.php?a=signup">S'inscrire ou se connecter</a></div>
<div class="container">
    <header class="jumbotron">
        <h1>Billet simple pour l'Alaska</h1>
    </header>
    <h2>Derniers chapitres</h2>

    <div class="post">
            <?php
            foreach ($param1 as $chap) {
                echo "<h3>" . htmlspecialchars($chap->getTitle()) . " par " . htmlspecialchars($chap->getAuthor()) . " – <a href='index.php?a=aff&p=" . htmlspecialchars($chap->getId()) . "'>Afficher</a></h3><p>" . mb_strimwidth($chap->getContent(), 0, 410) . "…</p>";
            }
            ?>
    </div>

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
        <?php } ?>
    </div>
</div>

<p><a href="index.php?a=acc">Debug admin</a></p>