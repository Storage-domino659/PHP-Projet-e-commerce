<?php
    include 'setting.php';
    include 'header.php';
    // include 'hero.php'
?>

<!-- Main -->
	<main id="main">
		<section class="product">
			<img src="img/content/trunks 2.svg" alt="">
			<div>
				<div>
					<h3>Sweat Eijiro</h3>
					<h3>35€</h3>
				</div>
				<h5>REF : 168257389</h5>
				<div>
					<img src="img/logo/shirt.svg" alt="">
					<h4>PRODUCT DETAILS</h4>
				</div>
				<p>Soft sweatshirt fabric <br>
				Style and comfort – it's a lifestyle 
				</p>
				<p>Main: 70% Polyester, 30% Cotton. <br>
				SHOW LESS</p>
				<p>Help about your size</p>
				<form method="get" action="">
					<hidden type="text" name="product" id="product_name">
					<select name="select">
						<option name="size" value="date" id="size_s">Date</option>
						<option name="artist" value="artist">Artist</option>
						<option name="ville" value="location">Ville</option>
					</select>
					<input type="radio" name="size" id="size_s" value="S">
					<label for="size_s">S</label><br>
					<input type="radio" name="size" id="size_m" value="M" checked>
					<label for="size_m">M</label><br>
					<input type="radio" name="size" id="size_l" value="L">
					<label for="size_l">L</label><br>
					<input type="radio" name="size" id="size_xl" value="XL">
					<label for="size_xl">XL</label><br>
				</form>
				<p>Free delivery to store</p>
				<p>Information on deliveries and returns</p>
			</div>
		</section>
	</main>

<?php include 'footer.php'; ?>