<?php
    include '../session.php';
    include '../db.php';
?>

<?php
$postid = $_POST['postid'];
$contenu = $_POST['contenu']; 
if ( isset($_POST['contenu']) && $_POST['contenu'] != NULL )  {
    $update = "UPDATE post SET contenu = :contenu  WHERE id = $postid";
    $requete = $bdd->prepare ( $update );
    $requete->execute(array(
        'contenu' => $_POST['contenu']));
    header("Location: ../blog.php?id=$postid");
    exit;
    }
?>