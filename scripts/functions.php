<?php 
function get_header() {
?> 
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="../assets/fa/css/all.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
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

