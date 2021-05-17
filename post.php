<?php
    include 'session.php';
    require 'db.php';
    include 'setting.php';
    include 'header.php';
?>

<div class="container fill">
    <form method="POST" action="validation/ecrire-un-post.php">
        <label for="form_contenu"><h2>Posts</h2></label><br>
        
        <label for="form_title" class="form_label">Titre</label>
        <input type="text" style="width: 93%;" name="title" id="form_title" maxlength="50" required> <br><br>

        <textarea name="contenu" class="textarea" na id="form_contenu" required></textarea><br><br>
        
        <input type="submit" class="button" value="Envoyez">
    </form>
</div>

<?php include 'footer.php'; ?>