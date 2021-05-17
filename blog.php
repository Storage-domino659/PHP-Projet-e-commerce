<?php
    include 'session.php';
    require 'db.php';
    include 'setting.php';
    include 'header.php';
?>
<!-- Deso j'aurai aimé avoir le temps de refacto et de commenter tt ca ;) -->
<div class="container fill">
    <?php
        $postid = $_GET['id'];
        $queryindividualpost = $bdd->query("SELECT * FROM post  WHERE id = $postid ORDER BY id DESC");
        $dataindividualpost=$queryindividualpost->fetch(PDO::FETCH_ASSOC);

        $userid = $dataindividualpost['userid'];
        $querypseudo = $bdd->query("SELECT pseudo FROM user WHERE id = $userid");
        $postpseudo=$querypseudo->fetch(PDO::FETCH_ASSOC);

        ?>  <h2>Posts</h2><br> <?php

        printf("<p class='card'>%s <br> %s <br> Ecrit par: %s <br> Le: %s</p><br></a>", $dataindividualpost['title'],  $dataindividualpost['contenu'], $postpseudo['pseudo'], $dataindividualpost['postdate']);

        $useridpost = $dataindividualpost['userid'];

        if ( isset($_SESSION['token']) && $_SESSION['token'] = true && $_SESSION['id'] == $useridpost) { ?>

            <form method="POST" action="validation/modifier-un-post.php">
                <input type="hidden" name="postid" id="post_id" value="<?php echo $postid ?>">
                <input type="text" name="contenu" id="modifier_post_contenu" required>
                <input type="submit" class="button" value="Modifier">
            </form> <?php 
        }

        ?>

        <br><h3>Commentaires:</h3><br>
        
        <?php
        $querycomment = $bdd->query("SELECT * FROM commentaire WHERE postid = '$postid' ORDER BY id");
        while ( $datacomment=$querycomment->fetch(PDO::FETCH_ASSOC) ) {
            
            $useridcomment = $datacomment['userid'];
            $querypseudocommentaire = $bdd->query("SELECT pseudo FROM user WHERE id = $useridcomment");
            $commentairepseudo=$querypseudocommentaire->fetch(PDO::FETCH_ASSOC);

            printf("<p>%s <br> Ecrit par: %s</p><br>", $datacomment['contenu'], $commentairepseudo['pseudo']);

            
            $commmentid = $datacomment['id'];

            if ( isset($_SESSION['token']) && $_SESSION['token'] = true && $_SESSION['id'] == $useridcomment) { ?> 

                <form method="POST" action="validation/modifier-un-commentaire.php">
                    <input type="hidden" name="postid" id="post_id" value="<?php echo $postid ?>">
                    <input type="hidden" name="commmentid" id="commment_id" value="<?php echo $commmentid ?>">
                    <input type="text" name="contenu" id="modifier_form_contenu" required>
                    <input type="submit" class="button" value="Modifier">
                </form><br> <?php
            }
        } 
        
        if ( isset($_SESSION['token']) && $_SESSION['token'] = true) {
            ?>

        
        <form method="POST" action="validation/ecrire-un-commentaire.php">
            <input type="hidden" name="id" id="post_id" value="<?php echo $postid ?>">
            <input type="text" name="contenu" id="form_contenu" required>
            <input type="submit" class="button" value="Commenter">
        </form>

        <?php 
        } ?>  
    <br><br>
    <a class="inbut" href="blogs.php">Retour</a><br><br>
</div>

<?php include 'footer.php'; ?>

