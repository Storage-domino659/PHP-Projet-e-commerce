<?php
    include 'session.php';
    require 'db.php';
    include 'setting.php';
    include 'header.php';
?>

<div class="container fill">
    <br><br><br>
    <form method="POST" action="validation/validationlogin.php">
        <label for="form_pseudo">Pseudo</label>
        <input type="text" style="width: 89%;" name="pseudo" id="form_pseudo" maxlength="30" required> <br>
        <br><br>
        <label for="form_password">Password</label>
        <input type="password" style="width: 86%;" name="password" id="form_password" maxlength="30" required><br>
        <br><br>
        <input type="submit" class="button" value="Log In">
    </form> <br> <?php
    
    if (isset($_SESSION['message'])) {
        printf( '<p>%s</p>', $_SESSION['message'] );
        unset($_SESSION);
    } ?>
</div>

<?php include 'footer.php'; ?>