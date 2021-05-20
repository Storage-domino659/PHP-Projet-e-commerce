<!-- txt -->
<div id="txt">
    <section>
        <h2>Titre1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque debitis dolore consequuntur facilis, et enim iusto quasi! Velit ipsa excepturi vero optio odio libero laudantium doloribus nam officiis minima!
        Velit recusandae porro mollitia aperiam eligendi unde maxime eum, consequatur fugit temporibus voluptas numquam sequi modi explicabo animi expedita, deserunt quae minima facilis hic. Quidem aut reiciendis aliquid autem aspernatur.
        Consectetur, dolorem est nihil quisquam temporibus recusandae ea asperiores quos non. Sit officiis nobis delectus corporis. Id delectus, dolores a quae voluptatem reiciendis. Perspiciatis nostrum fugit adipisci ipsum, modi quas.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero culpa quaerat modi facilis at temporibus qui. Assumenda molestiae soluta asperiores iste culpa? Non facere, vel earum velit ullam neque odio.</p>
    </section>
    <section>
        <h2>Titre 2</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae quam quasi ullam earum voluptatibus reiciendis. Optio aut sequi nihil ipsum, dignissimos molestiae sit rem natus ea nobis aspernatur exercitationem repellat.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, animi porro! Mollitia provident sint at laborum ipsum, molestiae voluptatem veniam id perspiciatis quo porro, accusamus adipisci dignissimos magni impedit cumque.
        Deleniti mollitia quos ex corrupti et explicabo maiores voluptate dolor officia, dolores voluptates perferendis sed ea, eum repellat omnis repellendus consequuntur consectetur? A repellat rem, facilis reprehenderit pariatur dolor non!</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto tenetur magnam dolores est. Illo veniam sunt maxime cumque sapiente, sequi quibusdam et rem voluptatibus id distinctio quod possimus dolorem itaque!</p>
    </section>
    <section>
        <h2>Titre 3</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam sequi eveniet voluptatum, maxime eaque blanditiis rerum facilis, laboriosam hic pariatur, illum doloribus numquam accusantium enim obcaecati quibusdam. Dolorem, corporis similique?
        Totam obcaecati, dolorum dicta nihil temporibus eius quasi non doloremque eveniet harum. Saepe laudantium sint quia facilis fugiat in rerum necessitatibus. Harum a tenetur quidem aperiam, quod odio amet! Nihil.
        Amet, recusandae soluta. At nobis officiis voluptate necessitatibus ratione saepe adipisci dolore vitae fugiat ducimus, repellendus exercitationem perferendis possimus veritatis eveniet ipsam odit iure delectus nostrum quibusdam voluptatum quos illum!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam necessitatibus deleniti esse unde porro architecto ipsa! Ad odio sed iusto, vitae quod commodi, accusamus porro minus ipsum blanditiis, expedita numquam?</p>
    </section>
</div>

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