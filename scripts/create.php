<?php
include "functions.php";
get_header();
?>
<h1>Création d'une organisation</h1>
<form method="post" action="database_add.php" id="creationform">
        <input type="text" name="orga" placeholder="Entrez le nom de l'organisation*" class="form-control" required/>
        <input type="text" name="domain" placeholder="Entrez le domaine de l'organisation" class="form-control" />
        <input type="text" name="aliases" placeholder="Entrez l'alias de l'organisation" class="form-control" />
        <input type="submit" value="Ajouter" id="add" name="add" class="btn btn-outline-success">
</form>