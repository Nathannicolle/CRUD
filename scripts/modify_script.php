<?php
include "functions.php";
get_header();
$dbo=connect();
$id = $_POST["id"];
$statement=connect()->query("select * from Organization WHERE id =" . $_POST["id"]);
try {
        if(connect()->exec("UPDATE Organization SET name ='" . $_POST["name"] . "', domain='" . $_POST["domain"] . "', aliases ='" . $_POST["aliases"] . "' WHERE id=" . $_POST["id"])) {
            echo "Organisation modifiée <br>"; 
        }
    } catch(\PDOException $e) {
        echo $e->getMessage();
        echo "Impossible de modifier l'organisation";
    }
echo "<a href='database_view.php'>Retour à la liste</a>";