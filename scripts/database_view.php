<?php
include "functions.php";
get_header();
$statement=connect()->query('select * from Organization');
?>
<table id="organizationlist">
<tr>
    <td>name</td>
    <td>domain</td>
    <td>aliases</td>
</tr>

<?php
$idligne = 0;
foreach ($statement as $row) {
    echo "<tr><td>" . $row['name'] . "</td>";
    echo "<td>" . $row['domain'] . "</td>";
    echo "<td>" . $row['aliases'] . "<br></td>";
    $idligne = $idligne + 1;
    echo "<td><button type='submit' class='fas fa-trash-alt button_delete'></button></td></tr>";
}?>
</table>