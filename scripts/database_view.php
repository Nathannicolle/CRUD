<?php
include "functions.php";
get_header();
$statement=connect()->query('select * from Organization');
?>
<a href="../index.php">Accueil</a>
<table id="organizationlist">
<tr>
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
    echo "<td><a href='#' title='modifier'><i class='fas fa-pen'></i></a></td>";
    echo "<td><a href='delete.php?id=$id' title='supprimer'><i class='fas fa-trash-alt'></i></a></td></tr>";
}?>
</table>