<?php
include "functions.php";
get_header();
if(isset($_GET['search']) AND !empty($_GET['search'])) {
    $recherche=htmlspecialchars($_GET['search']);
    $statement=connect()->query("SELECT * FROM Organization WHERE name LIKE '%" . $recherche . "%' or domain LIKE '%" . $recherche . "%' or aliases LIKE '%" . $recherche . "%'");
} else {
    $statement=connect()->query("SELECT * FROM Organization");
}
?>
<h1>Liste des organisations</h1>
<form method="GET" class="search_form">
    <input type="search" name="search" placeholder="Rechercher une organisation" class="form-control"/>
    <input type="submit" name="search-btn" value="Chercher" class="btn btn-outline-primary" title="Chercher une organisation">
</form>
<table id="organizationlist">
<tr id="first-line">
    <td>name</td>
    <td>domain</td>
    <td>aliases</td>
</tr>

<?php
foreach ($statement as $row) {
    $id = $row['id'];
    echo "<tr><td>" . $row['name'] . "</td>";
    echo "<td>" . $row['domain'] . "</td>";
    echo "<td>" . $row['aliases'] . "<br></td>";
    echo "<td class='btn-table'><a href='modify.php?id=$id' title='modifier' class='btn btn-outline-dark'><i class='fas fa-pen'></i></a></td>";
    echo "<td class='btn-table'><a href='delete.php?id=$id' title='supprimer' class='btn btn-outline-danger'><i class='fas fa-trash-alt'></i></a></td></tr>";
}?>
</table>