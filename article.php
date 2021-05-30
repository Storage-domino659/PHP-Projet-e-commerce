<?php
    include 'setting.php';
    include 'header.php';
    // include 'hero.php'
?>

<!-- Main -->
	<main id="main">
		<section class="product flex">
			<!-- Product Image -->
			<img src="img/content/Kon.jpg" alt="">
			<div id="gapproduct">
			 	<!-- Wide Screen -->
				<div class="flex">
					<h3 class="none">Sweat Kon</h3>
					<h3 class="none" id="price">35€</h3>
				</div>
				<!-- Mobile -->
				<div class="flex halfspace">
					<h4 class="nonemobile">Sweat Eijiro</h4>
					<h4 class="nonemobile" id="price">35€</h4>
				</div>
				<h3 class="space none grey">REF : 168257389</h3>
				<div class="flex halfspace">
					<img src="img/logo/shirt.svg" alt="">
					<p style="padding-left: 5px;">Product Details</p>
				</div>
				<p class="none quarterspace">Soft sweatshirt fabric</p>
				<div id="d1" style="display: none">
					<p class="none quarterspace"> Style and comfort – it's a lifestyle</p>
					<p class="none">Main: 70% Polyester, 30% Cotton.</p>
				</div>
				<!-- Button Show -->
				<button class="space buttonmoreless none" id="togg1">SHOW MORE</button>
				<p class="none size">Help about your size</p>
				<form method="get" action="">
					<hidden type="text" name="product" id="product_name">
					<select class="buttonsize space" name="Taille">
						<option name="size_s" value="s">S</option>
						<option selected="selected" name="size_m" value="m">M</option>
						<option name="size_l" value="l">L</option>
						<option name="size_xl" value="xl">XL</option>
					</select>
					<br>
					<button class="buttonadd space" type="button">Add to your bag</button>
				</form>
				<p class="none halfspace">Free delivery to store</p>
				<p class="none grey">Information on deliveries and returns</p>
			</div>	
		</section>
	</main>
<script src="js/show-more-less.js"></script>
<script src="js/add-to-cart.js"></script>
<?php include 'footer.php'; ?>