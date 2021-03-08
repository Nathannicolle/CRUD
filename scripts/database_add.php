<?php 
include "functions.php";
get_header();
connect();

if(isset($_POST['orga'])) {
extract($_POST);
try {
    if(connect()->exec("INSERT INTO Organization(name, domain, aliases) VALUES('$orga', '$domain', '$aliases')") == 1) {
        ?> <h1 class='success'><i class='fas fa-check'></i> Organisation ajoutée <br></h1>
        <a href='create.php' class='btn btn-outline-primary'>En créer une nouvelle</a>
<?php }
} catch(\PDOException $e) {
?>
    <h1 class='error'><i class='fas fa-times'></i> Impossible d'ajouter l'organisation <?= $orga ?> </h1>
<?php }
}

