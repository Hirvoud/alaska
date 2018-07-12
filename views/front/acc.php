<?php 

ob_start(); ?>
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres</h2>
    <div class="post">
        <p>
            <?php
            foreach ($list as $chap) {
                echo    "<p>". $chap["author"]."</p><p>". $chap["title"]."</p><p>". $chap["content"]."</p>";
            }
            ?>
        </p>
    </div>

    
    <h2>Ajouter un chapitre</h2>
    <p>
        <form method="POST" action="index.php?a=add">
            Pseudonyme :<br />
            <input type="text" name="author"><br />
            Titre :<br />
            <input type="text" name="title"><br />
            Message :<br />
            <textarea type="text" name="content"></textarea><br /><br />
            <input type="submit" value="Envoyer">
        </form>
    </p>
<?php $content = ob_get_clean();

    require "def.php";
?>