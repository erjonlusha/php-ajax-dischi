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
include __DIR__ . '/../database.php';
echo $ciao;
var_dump($albums);
?>