<?php
    include '../session.php';
    include '../db.php';
?>

<?php
if ( isset($_POST['contenu']) && $_POST['contenu'] != NULL )  {
    $insert = "INSERT INTO commentaire (userid, postid, contenu, commentairedate) VALUES (:userid, :postid, :contenu, :commentairedate)";
    $requete = $bdd->prepare( $insert );
    $requete->execute(array(
        'userid' => $_SESSION['id'],
        'postid' => $_POST['id'],
        'contenu' => $_POST['contenu'],
        'commentairedate' => date('Y-m-d H:i:s')));
        $postid = $_POST['id'];
        header("Location: ../blog.php?id=$postid");
        exit;
    }
?>
