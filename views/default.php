<!DOCTYPE html>

<html lang="fr">
    
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo ASSETS;?>/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" />
        <title>Billet simple pour l'Alaska | Un roman de Jean Forteroche</title>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=zq84ezss2gvbz6kkmu0cfy25g3a5444uje5z2a13ka4c1d7z"></script>
        <script>
            tinymce.init({
                selector: "#tntxt"
            });
         </script>
    </head>

    <body>
        <div id="page">
            <?php echo $content; ?>
        </div>
    </body>
    <footer class="footer footer-copyright text-center py-3">
        © 2018 : Jean Forteroche − <a href="index.php?a=leg">Mentions légales</a>
    </footer>
</html>