<!-- txt -->

<!-- <ul>
    <li><a id="acceuil" class="inactive" href="index.php">Accueil</a></li>
    <li><a id="autre" class="inactive" href="autre.php">Autre</a></li>
    <li><a id="contact" class="inactive" href="contact.php">Contact</a></li>
</ul> -->


/* liste */
body > header > nav > ul {
    display: flex;
    align-items: center;
}
body > header > nav > ul a {
    position: relative;
    color: inherit;
    text-decoration: none;
}

body > header > nav > ul a.active {
    text-decoration: underline;
}
body > header > nav > ul a:hover::before {
    content: ">";
    position: absolute;
    right: calc( 100% + 3px );
}

/* txt */
#txt {
    display: grid;
    gap: 20px;
    padding: 10px var( --global-horizontal-padding );
    box-sizing: border-box;
}

#txt h2 {
    font-size: 2em;
    font-weight: bold;
    margin-bottom: 1em;
}

#txt p {
    line-height: 1.3em;
    margin-top: 1em;
}

/* PC */
@media screen and ( min-width: 601px ) {
	#txt {
		grid-template-columns: 1fr 1fr 1fr;
	}
}

/* Hero */
#hero {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	row-gap: 50px;
	height: calc( 100vh - var( --navbar-height ) );
	background: url( "../img/hero/victoria-cj4Sd3jLPZ8-unsplash.jpg" );
	background-size: cover;
	background-position: center center;
	color: white;
	text-align: center;
	text-shadow: 0 0 3px var( --border-color );
}

#hero h1 {
	font-size: 3em;
	font-weight: bold;
	line-height: 1.5em;
}

#hero a {
	font-size: 1.3em;
	color: inherit;
}