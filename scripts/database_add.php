<?php 
include "functions.php";
connect();

if(isset($_POST['orga'])) {
extract($_POST);
try {
    if(connect()->exec("INSERT INTO Organization(name, domain) VALUES('$orga', '$domain')") == 1) {
        echo "Organisation ajoutée <br>";
        echo "<a href='create.php'>En créer une nouvelle</a>";
    }
} catch(\PDOException $e) {
    echo $e->getMessage();
    echo "Impossible d'ajouter l'organisation " . $domain;
}
}
