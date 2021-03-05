<?php
    include "functions.php";
    get_header();
    $dbo=connect();
    try {
        if(connect()->exec("DELETE FROM Organization WHERE id =" . $_GET["id"])) {
            echo "<h1 class='success'><i class='fas fa-check'></i> Organisation supprimée<br></h1>";
            echo "<a href='database_view.php' class='btn btn-outline-primary'>Retour à la liste</a>";
        }
    } catch(\PDOException $e) {
        echo $e->getMessage();
        echo "Impossible de supprimer l'organisation";
    }
?>