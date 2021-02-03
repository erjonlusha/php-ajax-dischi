<!-- php-ajax-dischi
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP

Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.

Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php 
e li stamperà attraverso VueJS.
Bonus:
Attraverso un’altra chiamata ajax, filtrare gli album per artista -->
<?php
include __DIR__ . '/vars.php';
// echo $ciao;
// var_dump($albums);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-dischi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="logo.png" alt="logo" />
        </div>
    </header>
    <div class="cds-container container"><?php
        foreach($albums as $album){?>
            <div class="cd" >
                <img src="<?php echo $album['poster'];?>" alt="">
                <h3><?php echo $album["title"];?></h3>
                <span class="author"><?php echo $album["author"]?></span>
                <span class="year"><?php echo $album["year"]?></span>
            </div>
        <?php }
    ?></div>    
</body>
</html>http://localhost:8088/php-ajax-dischi/database.php