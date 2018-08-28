<!DOCTYPE html>

<html lang="fr">
    
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?= ASSETS; ?>/css/bootstrap.css" />
        <link rel="stylesheet" href="<?= ASSETS; ?>/css/style.css" />
        <title>Billet simple pour l'Alaska | Un roman de Jean Forteroche</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="<?= ASSETS; ?>/js/bootstrap.js"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=zq84ezss2gvbz6kkmu0cfy25g3a5444uje5z2a13ka4c1d7z"></script>
        <script>
            tinymce.init({
                selector: "#tntxt"
            });
         </script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <header class="jumbotron">
                    <h1>Billet simple pour l'Alaska</h1>
                </header>
            </div>

            <?= $content; ?>
        </div>
        
    </body>
    <footer class="footer footer-copyright text-center py-3">
        © 2018 : Jean Forteroche − <a href="<?= HOST; ?>mentions-legales">Mentions légales</a>
    </footer>
    
</html>