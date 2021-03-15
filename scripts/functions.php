<?php 
function get_header() {
?> 
<!DOCTYPE html>
<html lang="fr" class="h-full">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="/crud/assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/crud/assets/fa/css/all.css">
        <link rel="stylesheet" type="text/css" href="/crud/assets/css/style.css">
    </head>
    <body>
    <div class="banner">
        <h1><i>C.R.U.D</i><br></h1>
        <h2 class="subtitle">Create.Read.Update.Delete</h2>
    </div>
    <div class="menu">
    <ul class="nav">
        <li class="nav-item"><a href="/crud/index.php" class="nav-link">Accueil</a></li>
        <li class="nav-item"><a href="/crud/scripts/create.php" class="nav-link">Création <!--<i class="fas fa-chevron-down"></i>--></a>
            <div class="sub-menu">
                <ul>
                    <li class="dropdown-element"><a href="#" class="nav-link">Créer une organisation</a></li>
                    <li class="dropdown-element"><a href="#" class="nav-link">Créer un utilisateur</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item"><a href="/crud/scripts/database_view.php" class="nav-link">Voir/Editer</a></li>
    </ul>
</div>
    <div class="container">
<?php
}

function get_footer() {
?>
    </div>
    </body>
</html>
<?php
} 

function connect(string $dbname='groups') {
    $dbo=null;
    try {
        $dbo = new PDO("mysql:host=127.0.0.1;dbname=$dbname;charset=UTF8", 'root', '');
        $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // à préciser pour l'utilisation en production pour être sûr  de la configuration
        return $dbo;
    } catch (\PDOException $e) {
        return false;
    }
}

function create($table_name, $fieldvalues) {
    $cmd_keys = array_keys($fieldvalues);
    $cmd_values = array_values($fieldvalues);
    $res="INSERT INTO $table_name(";
    $res.= \implode(',', $cmd_keys);
    $res.= ") VALUES(";
    array_walk($fieldvalues, function(&$v){$v = "'$v'";});
    $res.= \implode(',', $fieldvalues);
    $res.= ");";
    return $res;
}

function view_function($table_name) {
    $sth = connect()->prepare("SELECT * FROM $table_name");
    return $sth;
}

function view($table_name, $datas) {
    $cmd_values = array_values($datas);
    $table = "<table class='list'>";
    /*$table .= "<tr class='first-line'>";
    foreach($datas as $column) {
        $array_key = array_keys($column);
        foreach($array_key as $column_value) {
            $table .= "<td>" . $column_value . "</td>";
        }
    }
    $table .= "</tr>";*/
    foreach($datas as $row) {
        $array_value = array_values($row);
        $id = $row['id'];
        $table .= "<tr>";
            foreach($array_value as $value) {
                $table .= "<td>" . $value . "</td>";
            }
        $table .= "<td class='btn-table'><a href='modify.php?id=$id' title='modifier' class='btn btn-outline-dark'><i class='fas fa-pen'></i></a></td>"; 
        $table .= "<td class='btn-table'><a href='delete.php?id=$id' title='supprimer' class='btn btn-outline-danger'><i class='fas fa-trash-alt'></i></a></td></tr>";
    }
    $table .= "</table>";
    echo $table;
}

function update($table,$fieldvalues){
    $res="UPDATE $table SET";
    $parts=[];
    foreach ($fieldvalues as $key => $value){
        $parts[]="$key= :$key ";
    }
    $res.= \implode(',',$parts);
    return $res." WHERE id=:id";
}

?>

