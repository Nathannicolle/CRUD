<?php
    include "functions.php";
    get_header();
    $dbo=connect();
    foreach ($cmd as $row) {
        $id = $row['id'];
        $name = $row['name'];
        $domain = $row['domain'];
        $aliases = $row['aliases'];
        ?> 
        <form method='POST' action='modify_script.php' class='form_modify'><input type='text' name='name' value='<?= $name ?>' class='form-control'>
        <input type='text' name='domain' value='<?= $domain ?>' class='form-control'>
        <input type='text' name='aliases' value='<?= $aliases ?>' class='form-control'><br>
        <input type='hidden' value='<?= $id ?>' name='id'>
        <button class='btn btn-outline-primary'>Modifier</button></form>
    <?php }
    ?>