<?php 
include "functions.php";
get_header();
connect();

if(isset($_POST['orga'])) {
extract($_POST);
try {
    if(connect()->exec("INSERT INTO Organization(name, domain, aliases) VALUES('$orga', '$domain', '$aliases')") == 1) {
        echo "Organisation ajoutée <br>";
        echo "<a href='create.php'>En créer une nouvelle</a>";
    }
} catch(\PDOException $e) {
    echo $e->getMessage();
    echo "Impossible d'ajouter l'organisation " . $domain;
}
}

