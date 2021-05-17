<body>
    <header>
        <nav class="navbar">
            <ul class="flexul">

                <img src="image/GitHub-Mark-Light-64px.png" alt="" class="avatar"> <?php

                if ( isset($_SESSION['token']) && $_SESSION['token'] = true) { ?>
                    <h2 class="pseudo"><?php echo $_SESSION['pseudo']; ?></h2> <?php
                } ?>

                <li> <a class="link" href="index.php">Acceuil</a> </li>
                <li> <a class="link" href="blogs.php">Blogs</a> </li> <?php

                if ( isset($_SESSION['token']) && $_SESSION['token'] = true) { ?>

                    <li> <a href="post.php">Ecrire un Post</a> </li>
                    <li> <a href="signout.php">Deconnexion</a> </li> <?php
                    
                } else { ?>

                <li> <a class="link" href="login.php">Connexion</a> </li>
                <li> <a class="link" href="signin.php">Inscription</a> </li> <?php
                
                } ?>
            </ul>
        </nav>
    </header>
