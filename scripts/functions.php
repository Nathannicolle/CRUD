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
    <div class="banner">
        <h1><i>C.R.U.D</i><br></h1>
        <h2 class="subtitle">Create.Read.Update.Delete</h2>
    </div>
    <ul class="nav">
        <li class="nav-item"><a href="/crud/index.php" class="nav-link">Accueil</a></li>
        <li class="nav-item"><a href="/crud/scripts/create.php" class="nav-link">Création</a></li>
        <li class="nav-item"><a href="/crud/scripts/database_view.php" class="nav-link">Voir/Editer</a></li>
    </ul>
    <div class="container">
<?php
}

function get_footer() {
?>
    </div>
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

