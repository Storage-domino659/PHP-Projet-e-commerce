var a_products = document.querySelector(".a-products");

fetch("js/cart")
.then(function(response) { return response.json()})
.then(cart_products => {
    var cart = cart_products;
    render_cart(cart)
})

function render_cart(cart) {
    cart.foreach(cart_product => product_cart(cart_product))
}

function product_cart(cart) {

    var product_cart = document.createElement("div");
    product_cart.className = "products";
    product_cart.innerHTML = (`                  
    <div class="product-image">
    <img src="img/content/Kon.jpg" alt="flamingo">
    </div>
    <div class="products-info">
    <div class="info product-name">Sweat Kon</div>
    <div class="info product-description">Taille : M</div>
    <div class="info product-quantity">Quantity: 1</div>
    <div class="info product-price">Prix: 35€</div>
    </div>`);
    a_products.appendChild(product_cart);  
}

product_cart();