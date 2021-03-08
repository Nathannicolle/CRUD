<?php
    include "functions.php";
    get_header();
    $dbo=connect();
    try {
        if(connect()->exec("DELETE FROM Organization WHERE id =" . $_GET["id"])) {
        ?>
            <h1 class='success'><i class='fas fa-check'></i> Organisation supprimée<br></h1>
            <a href='database_view.php' class='btn btn-outline-primary'>Retour à la liste</a>
        <?php }
    } catch(\PDOException $e) {
        ?>
        <h1 class='error'><i class='fas fa-times'></i> Impossible de supprimer l'organisation </h1>
    <?php }
?>