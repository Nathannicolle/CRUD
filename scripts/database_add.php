<?php 
include "functions.php";
get_header();
connect();

if(isset($_POST['orga'])) {
extract($_POST);
try {
    if(connect()->exec("INSERT INTO Organization(name, domain, aliases) VALUES('$orga', '$domain', '$aliases')") == 1) {
        echo "<h1 class='success'><i class='fas fa-check'></i> Organisation ajoutée <br></h1>";
        echo "<a href='create.php' class='btn btn-outline-primary'>En créer une nouvelle</a>";
    }
} catch(\PDOException $e) {
    echo $e->getMessage();
    echo "Impossible d'ajouter l'organisation " . $domain;
}
}

