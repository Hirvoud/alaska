<?php
session_start();
if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] !== "Jean Forteroche" ) { 
    header("Location: index.php?a=err&p=denied");
}
?>

<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p class="user">Utilisateur : <?= $_SESSION["pseudo"]; ?></p>
    <h2>Derniers chapitres</h2>
    <p><a href="index.php?a=add">Ajouter une entrée</a></p>
    <div class="post">
        <p>
            <?php
            foreach ($param as $chap) {
                echo    "<h3>" . $chap->getTitle() . " par " . $chap->getAuthor() . " – <a href='index.php?a=aff&p=".$chap->getId()."'>Afficher</a></h3><p>". mb_strimwidth($chap->getContent(), 0, 410)."…</p>";
            }
            ?>
        </p>
    </div>
    <p><a href="index.php?a=deco">Déconnexion</a></p>
</div>