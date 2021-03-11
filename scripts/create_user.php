<?php
include "functions.php";
get_header();
?>
<h1>Création d'un utilisateur</h1>
<form method="post" class="creationform">
        <input type="text" name="firstname" placeholder="Entrez le prénom de l'utilisateur*" class="form-control" required/>
        <input type="text" name="lastname" placeholder="Entrez le nom de l'utilisateur*" class="form-control" required/>
        <input type="email" name="email" placeholder="Entrez l'email de l'utilisateur*" class="form-control" required/>
        <input type="password" name="password" placeholder="Entrez le mot de passe de l'utilisateur*" class="form-control" required>
        <input type="number" name="suspended" placeholder="Entrez le statut de suspension" class="form-control">
        <input type="number" name="idOrganization" placeholder="Entrez l'id de l'organisation liée à l'utilisateur" class="form-control">
        <input type="submit" value="Ajouter" id="add" class="btn btn-outline-success">
</form>
<?php
$cmd_connect = connect();
$cmd = create("user", $_POST);
if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['email']) and isset($_POST['password']) and !empty($_POST['firstname']) and !empty($_POST['lastname']) and !empty($_POST['email']) and !empty($_POST['password'])) {
try {
    if(connect()->exec($cmd) == 1) {
        ?> <h1 class='success'><i class='fas fa-check'></i> Utilisateur ajoutée <br></h1>
    <?php }
} catch(\PDOException $e) {
?>
    <h1 class='error'><i class='fas fa-times'></i> Impossible d'ajouter l'utilisateur</h1>
<?php }
}