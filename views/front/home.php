<div class="navbar"><a href="index.php?a=signup">S'inscrire ou se connecter</a></div>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres</h2>

    <div class="post">
            <?php
            foreach ($param1 as $chap) {
                echo "<h3>" . htmlspecialchars($chap->getTitle()) . " par " . htmlspecialchars($chap->getAuthor()) . " – <a href='index.php?a=aff&p=" . htmlspecialchars($chap->getId()) . "'>Afficher</a></h3><p>" . mb_strimwidth($chap->getContent(), 0, 410) . "…</p>";
            }
            ?>
    </div>
    <p><a href="index.php?a=acc">Debug admin</a>
</div>