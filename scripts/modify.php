<?php
    include "functions.php";
    get_header();
    $dbo=connect();
    $statement=connect()->query("select * from Organization WHERE id =" . $_GET["id"]);
    foreach ($statement as $row) {
        $id = $row['id'];
        $name = $row['name'];
        $domain = $row['domain'];
        $aliases = $row['aliases'];
        echo "<form method='POST' action='modify_script.php'><input type='text' name='name' value='$name'>";
        echo "<input type='text' name='domain' value='$domain'>";
        echo "<input type='text' name='aliases' value='$aliases'><br>";
        echo "<input type='hidden' value='". $id ."' name='id'>";
        echo "<button>Modifier</button></form>";
    }
    ?>