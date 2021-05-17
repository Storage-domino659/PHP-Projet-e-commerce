<?php
    include '../session.php';
    include '../db.php';
?>

<?php
    $_SESSION['message'] = null;
    $askpseudo = $bdd->prepare( 'SELECT * FROM user WHERE LOWER(pseudo) = :pseudo' );
    $askpseudo->execute(array(
        'pseudo' => strtolower($_POST['pseudo'])
    ));

    $_SESSION['token'] = true;
    $_SESSION['id'] = $bdd->lastInsertId();
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['email'] = $_POST['email'];
    // $_SESSION['mdp'] = $hashpassword;
    // var_dump($_SESSION);

    $password=$_POST['mdp'];
    $hashpassword = password_hash ( $password , PASSWORD_DEFAULT);

    if ( isset($_POST['pseudo']) && isset($_POST['mdp']) && isset($_POST['email'])
        && $_POST['pseudo'] != NULL && $_POST['pseudo'] != NULL && $_POST['pseudo'] != NULL )  {
        if ($askpseudo->rowCount() == 0) {
            if ($_POST['mdp'] == $_POST['mdp_confirmation']) {
                $insert = "INSERT INTO user (pseudo, mdp, email, sexe) VALUES (:pseudo, :mdp, :email, :sexe)";
                $requete = $bdd->prepare( $insert );
                $requete->execute(array(
                    'pseudo' => $_POST['pseudo'],
                    'mdp' => $hashpassword,
                    'email' => $_POST['email'],
                    'sexe' => $_POST['sexe']));

                if ( $requete->rowCount() == 1 ) {
                    $_SESSION['token'] = true;
                    $_SESSION['id'] = $bdd->lastInsertId();
                    $_SESSION['pseudo'] = $_POST['pseudo'];
                    // $_SESSION['mdp'] = $hashpassword;
                    // var_dump($_SESSION);
                    header("Location: ../index.php");
                    exit;
                }
            }
            else {
                $_SESSION['message'] = 'Passeword are not identical';
                header("Location: ../signin.php");
                exit;
            }
        }
        else {
            $_SESSION['message'] = 'Pseudo was already taken!';
            header("Location: ../signin.php");
            exit;
        }
    }
    else {
        $_SESSION['message'] = 'Vous n\'avez rien rentré!';
        header("Location: ../signin.php");
        exit;
    }
?>