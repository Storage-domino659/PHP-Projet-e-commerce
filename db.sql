DROP DATABASE IF EXISTS blogmartinsion;
CREATE DATABASE IF NOT EXISTS blogmartinsion CHARACTER SET 'utf8';

CREATE TABLE IF NOT EXISTS blogmartinsion.user (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(30) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    email VARCHAR(40) NOT NULL,
    sexe CHAR(1) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS blogmartinsion.post (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    userid INT UNSIGNED NOT NULL,
    title VARCHAR(50) NOT NULL,
    contenu TEXT NOT NULL,
    postdate DATETIME NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS blogmartinsion.commentaire (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    userid INT UNSIGNED NOT NULL,
    postid INT UNSIGNED NOT NULL,
    contenu TEXT NOT NULL,
    commentairedate DATETIME NOT NULL,
    PRIMARY KEY (id)
);


INSERT INTO user (pseudo, mdp, email, sexe)
VALUES ('domino', '$2y$10$73tuO.xp/3Jz7v9N8a7p8e75td6pP5ElGLFf2brPgzcHYdTOiuRLu', 'martin@sionfamily.com', 'M');