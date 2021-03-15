<?php
include "scripts/functions.php";
get_header();
?>
<h1>Bienvenue sur cette interface de crud</h1>
<div class="box_acc">
    <div class="box box1">
        <h1>Créer une organisation</h1>
        <p>Créer une organisation avec un nom, un domaine et un aliase</p>
        <a href="scripts/create_orga.php" class="btn btn-outline-primary">Créer</a>
    </div>
    <div class="box box2">
        <h1>Voir/Editer/Supprimer une organisation</h1>
        <p>Voir la liste des organisations, en éditer ou en supprimer</p>
        <a href="scripts/database_view_orga.php" class="btn btn-outline-primary">Voir</a>
    </div>  
</div>
<div class="box_acc">
    <div class="box box3">
        <h1>Créer un utilisateur</h1>
        <p>Créer une utilisateur avec un prénom, un nom, un email, un mot de passe</p>
        <a href="scripts/create_user.php" class="btn btn-outline-primary">Créer</a>
    </div>
    <div class="box box4">
        <h1>Voir/Editer/Supprimer un utilisateur</h1>
        <p>Voir la liste des utilisateurs, en éditer ou en supprimer</p>
        <a href="scripts/database_view_user.php" class="btn btn-outline-primary">Voir</a>
    </div>  
</div>