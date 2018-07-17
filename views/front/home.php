<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <h2>Derniers chapitres</h2>
    <p><a href="index.php?a=add">Ajouter une entrée</a></p>
    <div class="post">
        <p>
            <?php
            foreach ($param as $chap) {
                echo    "<p>". $chap["author"]."</p><p>". $chap["title"]."</p><p>". $chap["content"]."</p>";
            }
            ?>
        </p>
    </div>
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