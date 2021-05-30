<?php
    include 'setting.php';
    include 'header.php';
    // include 'hero.php'
?>

<!-- Main -->
	<main id="main">
        <section class="product">
            <div class="flex shopping-cart">
            <div class="a-products">
            <span> Shopping bag items</span>

                <div class="products">
                    <div class="product-image">
                        <img src="img/content/Kon.jpg" alt="flamingo">
                    </div>
                    <div class="products-info">
                        <div class="info product-name">Sweat Kon</div>
                        <div class="info product-description">Taille : M</div>
                        <div class="info product-quantity">Quantity: 1</div>
                        <div class="info product-price">Prix: 35€</div>
                    </div>
                </div>

                <span class="trait"></span>
            </div>

            <div class="shopping-cart-head">
                <span  class="info-cart">Shopping cart Total</span>
                <span class="info-cart sub-total">Sub-Total 70€</span>
                <span class="info-cart shipping">Shipping 7€</span>
                <span class="info-cart">Discount code</span>
                <section class="discount-code">
                    <p>Enter your code</p>
                </section>
                <span class="trait"></span>
                <span class="info-cart total-price">Total 77€</span>

                <div class="cart-buttons">
                    <button class="button cart-checkout">Go to Checkout</button>
                </div>
            </div>
            </div>
        </section>
	</main>

<script src="js/panier.js"></script>
<?php include 'footer.php'; ?>