<?php
include "scripts/functions.php";
get_header();
?>
<h1>Bienvenue sur cette interface de crud</h1>
<div class="box_acc">
    <div class="box box1">
        <h1>Créer une organisation</h1>
        <p>Créer une organisation avec un nom, un domaine et un aliase</p>
        <a href="scripts/create.php" class="btn btn-outline-primary">Créer</a>
    </div>
    <div class="box box2">
        <h1>Voir/Editer/Supprimer une organisation</h1>
        <p>Voir la liste des organisations, en éditer ou en supprimer</p>
        <a href="scripts/database_view.php" class="btn btn-outline-primary">Voir</a>
    </div>  
</div>