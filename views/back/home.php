<?php
session_start();
if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] !== "Jean Forteroche" ) { 
    header("Location: ../views/front/denied.php");
}

?>
<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres - <?= $_SESSION["pseudo"]; ?></h2>
    <p><a href="index.php?a=addP">Ajouter une entrée</a></p>
    <div class="post">
        <p>
            <?php
            foreach ($param as $chap) {
                echo    "<h3>" . htmlspecialchars($chap["title"]) . " par " . htmlspecialchars($chap["author"]) . " – <a href='index.php?a=aff&p=".$chap["id"]."'>Afficher</a></h3><p>". htmlspecialchars(mb_strimwidth($chap["content"], 0, 410))."…</p>";
            }
            ?>
        </p>
    </div>
    <p><a href="index.php?a=deco">Déconnexion</a>
</div>