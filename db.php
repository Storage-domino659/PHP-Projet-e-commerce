<?php
    $dsn = 'mysql:host=localhost;dbname=blogmartinsion;chartset=UTF8';
    $user = 'root';
    $pwd = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $bdd = new PDO($dsn, $user, $pwd, $options);  
    }

    catch ( PDOException $e ) {
        die ( 'Erreur : ' . $e->getMessage() );
    }
?>