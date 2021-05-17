<?php
    include 'session.php';
    require 'db.php';
    include 'setting.php';
    include 'header.php';
?>

<div class="container fill">
    <br>
    <form method="post" action="validation/validationsignin.php">
        <label for="form_pseudo">Pseudo</label>
        <input type="text" style="width: 89%;" name="pseudo" id="form_pseudo" maxlength="30" required><br>
        <br>
        <label for="form_password">Mot de passe</label>
        <input type="password" style="width: 100%;" name="mdp" id="form_password" maxlength="30" required><br>
        <br>
        <label for="form_password_confirmation">Entrez le mot de passe à nouveau</label>
        <input type="password" style="width: 100%;" name="mdp_confirmation" id="form_password_confirmation" maxlength="30" required><br>
        <br>
        <input type="radio" name="sexe" id="form_sexe_X" value="X" checked>
        <label for="form_sexe_X">Xénomorphe</label><br>
        <input type="radio" name="sexe" id="form_sexe_H" value="H">
        <label for="form_sexe_H">Homme</label><br>
        <input type="radio" name="sexe" id="form_sexe_F" value="F">
        <label for="form_sexe_F">Femme</label><br>
        <br>
        <label for="form_email">Email</label>
        <input type="email" style="width: 91%;" name="email" id="form_email" maxlength="40" required><br>
        <br>
        <?php echo $_SESSION['message']; ?>
        <br><br>
        <input type="submit" class="button" value="Créer votre compte !">
    </form>
</div>

<?php include 'footer.php'; ?>