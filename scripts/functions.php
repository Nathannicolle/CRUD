<?php 
function get_header() {
?> 
<!DOCTYPE html>
<html lang="fr" class="h-full">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="/crud/assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/crud/assets/fa/css/all.css">
        <link rel="stylesheet" type="text/css" href="/crud/assets/css/style.css">
    </head>
    <body>
<?php
}

function get_footer() {
?>
    </body>
</html>
<?php
} 

function connect(string $dbname='groups') {
    $dbo=null;
    try {
        $dbo = new PDO("mysql:host=127.0.0.1;dbname=$dbname;charset=UTF8", 'root', '');
        $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // à préciser pour l'utilisation en production pour être sûr  de la configuration
        return $dbo;
    } catch (\PDOException $e) {
        return false;
    }
}
?>

