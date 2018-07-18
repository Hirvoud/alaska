<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres</h2>
    <p><a href="index.php?a=addP">Ajouter une entrée</a></p>
    <div class="post">
        <p>
            <?php
            foreach ($param as $chap) {
                echo    "<p>" . $chap["title"] . " par " . $chap["author"] . " – <a href='index.php?a=aff&p=".$chap["id"]."'>Afficher</a></p><p>". mb_strimwidth($chap["content"], 0, 410)."…</p>";
            }
            ?>
        </p>
    </div>
</div>