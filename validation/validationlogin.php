<?php
    include '../session.php';
    include '../db.php';
?>

<?php
    $req = $bdd->prepare("SELECT id, pseudo , mdp FROM user WHERE pseudo = :pseudo");
    $req->execute(
        array(
            'pseudo' => $_POST['pseudo']
        )
    );

    $uservariable = ($req->fetchAll(PDO::FETCH_ASSOC));
    $id = $uservariable[0]['id'];
    $pseudo =  $uservariable[0]['pseudo'];
    $mdphash =  $uservariable[0]['mdp'];

    if ( $pseudo && password_verify( $_POST['password'], $mdphash )) {
        $_SESSION['token'] = true;
        $_SESSION['id'] = $id;
        $_SESSION['pseudo'] = $pseudo;
        header("Location: ../index.php");
        exit;
    } elseif ( $pseudo && !password_verify( $_POST['password'], $mdphash )) {
        $_SESSION['message'] = 'There is an error in you\'re password';
        header("Location: ../login.php");
        exit;
    } else {
        $_SESSION['message'] = 'There is an error in you\'re pseudo';
        header("Location: ../login.php");
        exit;
    }
?>