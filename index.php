<?php
    include 'setting.php';
    include 'header.php';
    // include 'hero.php'
?>

<!-- Main -->
	<main id="main">
		<!-- Video -->
		<section class="video">
			<video src="vid/fmaa.mp4" autoplay loop muted></video>
			<!-- Si tu veut le control -->
			<!-- <video controls src="vid/fmaa.mp4"></video> -->
			<h3 id="newcollection">New Collection</h3>
			<h2>FULLEMETAL ALCHMIST</h2>
			<a id="shopnow" href="collectiononepiece.php">Shop Now</a>
		</section>
		<!-- Collection -->
		<div class="titlecollection">
			<h2 >Our Collections</h2>
		</div>
		
		<section class="collection">
			<div>
				<a href="collectionbleach.php"><h3>Bleach</h3></a>
				<img src="img/content/bleach.jpg" alt="Img Bleach">

			</div>
			<div>
				<a href="collectionhxh.php"><h3>HxH</h3></a>
				<img src="img/content/hxh.jpg" alt="Img HxH">
			</div>
			<div>
				<a href="collectiondbz.php"><h3>DBZ</h3></a>
				<img src="img/content/dbz.jpg" alt="Img DBZ">
			</div>
		</section>
	</main>

<?php include 'footer.php'; ?>
