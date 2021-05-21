<?php
    include 'setting.php';
    include 'header.php';
    // include 'hero.php'
?>

<!-- Main -->
	<main id="main">
		<section class="product flex">
			<!-- Product Image -->
			<img src="img/content/trunks 2.svg" alt="">
			<div id="gapproduct">
				<div class="flex space">
					<h3>Sweat Eijiro</h3>
					<h3 id="price">35€</h3>
				</div>
				<h3 class="space none grey">REF : 168257389</h3>
				<div class="flex space">
					<img src="img/logo/shirt.svg" alt="">
					<p style="padding-left: 5px;">Product Details</p>
				</div>
				<p class="none space">Soft sweatshirt fabric <br>
				Style and comfort – it's a lifestyle</p>
				<p class="none space">Main: 70% Polyester, 30% Cotton. <br>
				SHOW LESS</p>
				<p class="none space">Help about your size</p>
				<form method="get" action="">
					<hidden type="text" name="product" id="product_name">
					<select class="buttonsize space" name="Taille">
						<option name="size_s" value="s">S</option>
						<option selected="selected" name="size_m" value="m">M</option>
						<option name="size_l" value="l">L</option>
						<option name="size_xl" value="xl">XL</option>
					</select>
					<br>
					<input class="buttonadd space" type="submit" value="Add to your bag">
				</form>
				<p class="none halfspace">Free delivery to store</p>
				<p class="none grey">Information on deliveries and returns</p>
			</div>
		</section>
	</main>

<?php include 'footer.php'; ?>