<?php
session_start();
?>
<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres</h2>
    <div class="post">
        <p>
            <?php
            foreach ($param as $chap) {
                echo "<h3>" . $chap->getTitle() . " par " . $chap->getAuthor() . " – <a href='index.php?a=fAff&p=" . $chap->getId() . "'>Afficher</a></h3><p>" . mb_strimwidth($chap->getContent(), 0, 410) . "…</p>";
            }
            ?>
        </p>
    </div>
    <p><a href="index.php?a=admin">Debug admin</a>
    <p><a href="index.php?a=signup">S'inscrire ou se connecter</a>
</div>