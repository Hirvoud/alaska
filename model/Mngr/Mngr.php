<?php

class Mngr
{
    protected function dbConnect()
    {
        $db = new PDO("mysql:host=localhost;dbname=alaska", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}


/*// Démarrage de la session
session_start ();
// On vérifie si le champ Login n'est pas vide.
if ($_SESSION['Login'] == '')
// Si c'est le cas, le visiteur ne s'est pas loger et subit une redirection
{
    Header('Location:index.html');
} else {
    echo "  <a href src='Disconnect.php'> Se déconnecter </a> || Utilisateur: " . $_SESSION['Login'] . "";
}
// Test De vérification que l'user est bien dans la liste des utilisateurs Mysql
// Connexion à la base de données MySql
$DataBase = mysql_connect("localhost", 'root', '');
// Cette table contient la liste des users enregistrés.
mysql_select_db("mysql", $DataBase);
// Nous allons chercher le vrai mot de passe ( crypté ) de l'utilisateur connecté
// Cryptage du mot de passe donné par l'utilsateur à la connexion par requête SQL
$Requete = "Select PASSWORD('" . $_SESSION['Password'] . "');";
$Resultat = mysql_query($Requete) or die(mysql_error());
while ($ligne = mysql_fetch_array($Resultat))
// Le vrai mot de passe crypté est sauvergardé dans la variable $RealPasswd
{
    $RealPasswd = $ligne["PASSWORD('" . $_SESSION['Login'] . "')"];
}
// Initialisation à Faux de la variable "L'utilisateur existe".
$CheckUser = false;
// On interroge la base de donnée Mysql sur le nom des users enregistrés
$Requete = "Select Password,User From user";
$Resultat = mysql_query($Requete) or die(mysql_error());
while ($ligne = mysql_fetch_array($Resultat)) {
// Si l'utilisateur X est celui de la session
    if ($ligne['User'] == $_SESSION['Login']) {
// Alors on vérifie si le mot de passe est le bon
        if ($RealPasswd == $ligne['Password'])
// Si le couple est bon, c’est que l’utilisateur est le bon.
        {
            $CheckUser = true;
        }
    }
}
// Si l'utilisateur n'est toujours pas valide à la fin de la lecture tableau
if ($CheckUser == false)
// Redirection vers la fenêtre de connexion.
{
    Header('Location:index.html');
}
?>*/