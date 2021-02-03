<?php 
include __DIR__ . "database.php";

header('Content-Type: application/jason');
echo json_encode($albums);
?>