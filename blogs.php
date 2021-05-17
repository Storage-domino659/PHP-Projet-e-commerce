<?php
    include 'session.php';
    require 'db.php';
    include 'setting.php';
    include 'header.php';
?>

<div class="container fill">
    <h2>Posts</h2><br>
    <?php
        $querypost = $bdd->query('SELECT * FROM post ORDER BY id DESC');
        while ( $datapost=$querypost->fetch(PDO::FETCH_ASSOC) ) {
            $postid = $datapost['id'];
            $title = ucfirst($datapost['title']);
            printf("<div class='card'><a href='blog.php?id=$postid'><h3>%s</h3><br><p class='text'>%s</p></a></div>", $title,  $datapost['contenu']);
        }
    ?>
</div>    

<?php include 'footer.php'; ?>