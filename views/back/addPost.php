<?php
session_start();
if (!isset($_SESSION["pseudo"]) || $_SESSION["pseudo"] !== "Jean Forteroche") {
    header("Location: index.php?a=err&p=denied");
}
?>

<div class="container">
    <h1>Billet simple pour l'Alaska</h1>
    <p><a href="index.php?a=admin">Retour à la page d'accueil</a></p>
    <p>
        <form class="col-lg-4" method="POST" action="index.php?a=add&e=submit">
            <legend>Ajouter un chapitre</legend>
                <label for="author">Nom : </label>
                    <input id="author" name="author" type="text" class="form-control">
                <label for="title">Titre : </label>
                    <input id="title" name="title" type="text" class="form-control">
                <label for="content">Contenu : </label>
                    <textarea row="10" id="content" name="content" type="textarea" class="form-control"></textarea><br />
                <input id="submit" type="submit" value="Envoyer">
        </form>
    </p>
</div>