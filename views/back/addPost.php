<?php
session_start();
?>
<div class="page">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php">Retour à la page d'accueil</a></p>
    <h2>Ajouter un chapitre</h2>
    <p>
        <form method="POST" action="index.php?a=add">
            Auteur :<br />
            <input type="text" name="author"><br />
            Titre :<br />
            <input type="text" name="title"><br />
            Contenu :<br />
            <textarea rows="10" cols="100" type="text" name="content"></textarea><br /><br />
            <input type="submit" value="Envoyer">
            </form>
    </p>
</div>