<?php
include "functions.php";
get_header();
?>
<h1>Création d'une organisation</h1>
<form method="post" class="creationform">
        <input type="text" name="name" placeholder="Entrez le nom de l'organisation*" class="form-control" required/>
        <input type="text" name="domain" placeholder="Entrez le domaine de l'organisation" class="form-control" />
        <input type="text" name="aliases" placeholder="Entrez l'alias de l'organisation" class="form-control" />
        <input type="submit" value="Ajouter" class="add btn btn-outline-success">
</form>
<?php
$cmd_connect = connect();
$cmd = create("Organization", $_POST);
if(isset($_POST['name']) and isset($_POST['domain']) and isset($_POST['aliases']) and !empty($_POST['name'])) {
try {
    if(connect()->exec($cmd) == 1) {
        ?> <h1 class='success'><i class='fas fa-check'></i> Organisation ajoutée <br></h1>
    <?php }
} catch(\PDOException $e) {
?>
    <h1 class='error'><i class='fas fa-times'></i> Impossible d'ajouter l'organisation</h1>
<?php }
}