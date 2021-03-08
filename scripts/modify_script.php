<?php
include "functions.php";
get_header();
$dbo=connect();
$id = $_POST["id"];
$statement=connect()->query("select * from Organization WHERE id =" . $_POST["id"]);
try {
        if(connect()->exec("UPDATE Organization SET name ='" . $_POST["name"] . "', domain='" . $_POST["domain"] . "', aliases ='" . $_POST["aliases"] . "' WHERE id=" . $_POST["id"])) {
            ?>
            <h1 class='success'><i class='fas fa-check'></i> Organisation modifiée <br></h1> 
            <a href='database_view.php' class='btn btn-outline-primary'>Retour à la liste</a>
        <?php }
    } catch(\PDOException $e) {
    ?>
        <h1 class='error'><i class='fas fa-times'></i> Impossible de modifier l'organisation</h1>
    <?php } ?>