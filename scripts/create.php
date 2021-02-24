<?php
include "functions.php";
get_header();
?>
<h1>Création d'une organisation</h1>
<form method="post" action="database_add.php">
        <input type="text" name="orga" placeholder="Entrez le nom de l'organisation" />
        <input type="text" name="domain" placeholder="Entrez le domaine de l'organisation" />
        <input type="submit" value="Ajouter" id="add" name="add">
</form>