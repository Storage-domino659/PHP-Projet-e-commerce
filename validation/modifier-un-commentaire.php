<?php
    include '../session.php';
    include '../db.php';
?>

<?php
$postid = $_POST['postid'];
$commmentid = $_POST['commmentid'];
$contenu = $_POST['contenu']; 

if ( isset($_POST['contenu']) && $_POST['contenu'] != NULL )  {
    $update = "UPDATE commentaire SET contenu = :contenu, commentairedate = :commentairedate  WHERE id = $commmentid";
    $requete = $bdd->prepare ( $update );
    $requete->execute(array(
        'contenu' => nl2br($_POST['contenu']),
        'commentairedate' => date('Y-m-d H:i:s')));
    header("Location: ../blog.php?id=$postid");
    exit;
    }
?>