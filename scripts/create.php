<?php
include "functions.php";
get_header();
?>
<h1>Sélectionnez l'élement que vous souhaitez ajouter</h1>
<div class="box_acc">
    <div class="box box1">
        <h1>Créer une organisation</h1>
        <p>Créer une organisation avec un nom, un domaine et un aliase</p>
        <a href="create_orga.php" class="btn btn-outline-primary">Créer</a>
    </div>
    <div class="box box2">
        <h1>Créer un utilisateur</h1>
        <p>Créer une utilisateur avec un prénom, un nom, un email, un mot de passe</p>
        <a href="create_user.php" class="btn btn-outline-primary">Créer</a>
    </div>
</div>