<?php
    include '../session.php';
    include '../db.php';
?>

<?php
if ( isset($_POST['contenu']) && isset($_POST['title'])
    && $_POST['contenu'] != NULL && $_POST['title'])  {
    
    $insert = "INSERT INTO post (userid, contenu, title, postdate) VALUES (:userid, :contenu, :title, :postdate)";
    $requete = $bdd->prepare( $insert );
    $requete->execute(array(
        'userid' => $_SESSION['id'],
        'contenu' => nl2br($_POST['contenu']),
        'title' => $_POST['title'],
        'postdate' => date('Y-m-d H:i:s')));
        header("Location: ../blogs.php");
        exit;
    }
?>
