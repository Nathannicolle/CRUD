<?php
    include "functions.php";
    get_header();
    $dbo=connect();
    try {
        if(connect()->exec("DELETE FROM Organization WHERE id =" . $_GET["id"])) {
            echo "Organisation supprimée <br>";
        }
    } catch(\PDOException $e) {
        echo $e->getMessage();
        echo "Impossible de supprimer l'organisation";
    }
    echo "<a href='database_view.php'>Retour à la liste</a>";
?>