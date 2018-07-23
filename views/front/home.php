<?php
session_start();
?>
<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres</h2>
    <div class="post">
        <p>
            <?php
            foreach ($param as $chap) {
                echo    "<h3>" . htmlspecialchars($chap["title"]) . " par " . htmlspecialchars($chap["author"]) . " – <a href='index.php?a=fAff&p=".$chap["id"]."'>Afficher</a></h3><p>". htmlspecialchars(mb_strimwidth($chap["content"], 0, 410))."…</p>";
            }
            ?>
        </p>
    </div>
    <p><a href="index.php?a=admin">Admin</a>
    <p><a href="index.php?a=signin">S'inscrire</a>
</div>