<!DOCTYPE html>
<html>
<head>

<title>NovaCart - Online Shopping</title>

<link rel="stylesheet" href="style.css">

<style>

/* ================= SEARCH ================= */

.search-area {
    width: 90%;
    max-width: 750px;
    margin: 30px auto;
    text-align: center;
}

.search-area input {
    width: 100%;
    padding: 18px 25px;
    border-radius: 35px;
    border: 2px solid rgba(0,234,255,.35);
    background: rgba(255,255,255,.10);
    color: white;
    outline: none;
    font-size: 17px;
    box-shadow: 0 0 25px rgba(0,234,255,.15);
}

.search-area input:focus {
    border-color: #00eaff;
    box-shadow: 0 0 30px rgba(0,234,255,.4);
}

.search-result {
    margin-top: 12px;
    color: #00eaff;
    font-size: 15px;
}


/* ================= CATEGORY ================= */

.categories {
    text-align: center;
    margin: 25px;
}

.categories button {
    width: auto;
    margin: 5px;
    padding: 10px 20px;
}


/* ================= PRODUCT ================= */

.product-card {
    position: relative;
}

.badge {
    position: absolute;
    top: 30px;
    left: 30px;
    z-index: 5;
    padding: 6px 12px;
    border-radius: 20px;
    background: #ff0099;
    font-size: 12px;
    font-weight: bold;
}


/* ================= CART OVERLAY ================= */

.cart-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.7);
    z-index: 1999;
}

.cart-overlay.active {
    display: block;
}


/* ================= CART DRAWER ================= */

.cart-drawer {
    position: fixed;
    right: -450px;
    top: 0;

    width: 420px;
    max-width: 92%;
    height: 100vh;

    background: #101020;

    border-left: 1px solid #00eaff;

    box-shadow:
        -10px 0 50px rgba(0,234,255,.25);

    z-index: 2000;

    transition: .4s;

    padding: 25px;

    overflow-y: auto;
}

.cart-drawer.active {
    right: 0;
}


/* ================= CART HEADER ================= */

.cart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.close-cart {
    width: auto;
    padding: 8px 14px;
    background: #ff176f;
}


/* ================= CART PRODUCT ================= */

.cart-product {
    display: flex;
    gap: 12px;

    padding: 15px 0;

    border-bottom:
        1px solid rgba(255,255,255,.12);
}

.cart-product img {
    width: 70px;
    height: 70px;

    object-fit: cover;

    border-radius: 12px;
}

.cart-info {
    flex: 1;
}

.cart-info h4 {
    margin-bottom: 7px;
}

.qty {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 8px;
}

.qty button {
    width: 32px;
    padding: 6px;
}

.remove {
    background: #e91e63;
    width: auto;
    padding: 6px 10px;
    margin-top: 7px;
}


/* ================= SUMMARY ================= */

.summary {
    margin-top: 20px;

    padding: 18px;

    background:
        rgba(255,255,255,.06);

    border-radius: 15px;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
}

.grand-total {
    color: #00eaff;

    font-size: 23px;

    font-weight: bold;

    border-top:
        1px solid rgba(255,255,255,.15);

    padding-top: 15px;
}


/* ================= COUPON ================= */

.coupon {
    display: flex;
    gap: 8px;
    margin: 15px 0;
}

.coupon input {
    flex: 1;
    padding: 12px;

    border-radius: 10px;

    border: none;

    outline: none;
}

.coupon button {
    width: auto;
}


/* ================= CHECKOUT ================= */

.checkout-section {
    display: none;

    width: 90%;
    max-width: 700px;

    margin: 50px auto;

    padding: 30px;

    background:
        rgba(255,255,255,.08);

    border:
        1px solid rgba(255,255,255,.18);

    border-radius: 25px;

    backdrop-filter: blur(20px);
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 7px;
    color: #ddd;
}

.form-group input,
.form-group textarea {

    width: 100%;

    padding: 14px;

    border-radius: 12px;

    border:
        1px solid rgba(255,255,255,.2);

    background:
        rgba(0,0,0,.35);

    color: white;

    outline: none;
}


/* ================= PAYMENT ================= */

.payment-methods {

    display: grid;

    grid-template-columns:
        repeat(3,1fr);

    gap: 10px;

    margin: 15px 0;
}

.payment-card {

    padding: 18px;

    text-align: center;

    border:
        1px solid rgba(255,255,255,.2);

    border-radius: 15px;

    cursor: pointer;

    transition: .3s;
}

.payment-card:hover {
    border-color: #00eaff;
}

.payment-card.selected {

    border-color: #00eaff;

    background:
        rgba(0,234,255,.12);

    box-shadow:
        0 0 20px rgba(0,234,255,.2);
}

.payment-details {

    display: none;

    margin-top: 15px;

    padding: 18px;

    background:
        rgba(0,0,0,.25);

    border-radius: 15px;
}

.payment-details input {

    box-sizing: border-box;

}


/* ================= SUCCESS ================= */

.order-success {

    display: none;

    width: 90%;
    max-width: 650px;

    margin: 80px auto;

    text-align: center;

    padding: 50px 25px;

    background:
        rgba(255,255,255,.08);

    border:
        1px solid #00ffb3;

    border-radius: 25px;

    box-shadow:
        0 0 50px rgba(0,255,179,.15);
}

.success-icon {
    font-size: 70px;
}

.order-success h1 {
    color: #00ffb3;
}

.order-number {
    color: #00eaff;
    font-size: 20px;
    margin: 15px;
}


/* ================= RESPONSIVE ================= */

@media(max-width:600px) {

    .payment-methods {
        grid-template-columns: 1fr;
    }

    .cart-drawer {
        width: 360px;
    }

}

</style>

</head>


<body>


<!-- ================= NAVBAR ================= -->

<nav>

    <div class="logo">
        NOVA<span>CART</span>
    </div>

    <div>

        <a href="#" onclick="goHome()">
            Home
        </a>

        <a href="#products">
            Products
        </a>

        <a href="javascript:void(0)"
           onclick="openCart()">

            🛒 Cart

            <span
                class="cart-count"
                id="cartCount">
                0
            </span>

        </a>

    </div>

</nav>


<!-- ================= HERO ================= -->

<section class="hero">

    <h1>
        SHOP THE FUTURE
    </h1>

    <p>
        Discover premium products with an extraordinary shopping experience.
    </p>

</section>


<!-- ================= SMART SEARCH ================= -->

<div class="search-area">

    <input
        type="text"
        id="search"
        placeholder="🔍 Search any product..."
        autocomplete="off"
        oninput="smartSearch()"
    >

    <div
        id="searchResult"
        class="search-result">

        🔎 Type a product name to search

    </div>

</div>


<!-- ================= CATEGORIES ================= -->

<div class="categories">

    <button onclick="filterProducts('all')">
        All
    </button>

    <button onclick="filterProducts('fashion')">
        👕 Fashion
    </button>

    <button onclick="filterProducts('electronics')">
        💻 Electronics
    </button>

    <button onclick="filterProducts('accessories')">
        🎒 Accessories
    </button>

    <button onclick="filterProducts('beauty')">
        ✨ Beauty
    </button>

</div>


<h2
    class="section-title"
    id="products">

    🔥 20 Trending Products

</h2>


<!-- ================= PRODUCTS ================= -->

<section
    class="products"
    id="productGrid">


<!-- 1 -->

<div class="product-card fashion">

<span class="badge">HOT</span>

<img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600">

<h2>Premium Sneakers</h2>

<div class="price">
₹2,499
</div>

<button onclick="addToCart(
1,
'Premium Sneakers',
2499,
'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 2 -->

<div class="product-card electronics">

<span class="badge">NEW</span>

<img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600">

<h2>Luxury Smart Watch</h2>

<div class="price">
₹3,999
</div>

<button onclick="addToCart(
2,
'Luxury Smart Watch',
3999,
'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 3 -->

<div class="product-card electronics">

<img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600">

<h2>Wireless Headphones</h2>

<div class="price">
₹1,899
</div>

<button onclick="addToCart(
3,
'Wireless Headphones',
1899,
'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 4 -->

<div class="product-card accessories">

<img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=600">

<h2>Premium Fashion Bag</h2>

<div class="price">
₹2,799
</div>

<button onclick="addToCart(
4,
'Premium Fashion Bag',
2799,
'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 5 -->

<div class="product-card fashion">

<img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=600">

<h2>Fashion Jacket</h2>

<div class="price">
₹2,299
</div>

<button onclick="addToCart(
5,
'Fashion Jacket',
2299,
'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 6 -->

<div class="product-card electronics">

<img src="https://images.unsplash.com/photo-1606220945770-b5b6c2c55bf1?w=600">

<h2>Wireless Earbuds</h2>

<div class="price">
₹1,499
</div>

<button onclick="addToCart(
6,
'Wireless Earbuds',
1499,
'https://images.unsplash.com/photo-1606220945770-b5b6c2c55bf1?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 7 -->

<div class="product-card accessories">

<img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600">

<h2>Travel Backpack</h2>

<div class="price">
₹1,799
</div>

<button onclick="addToCart(
7,
'Travel Backpack',
1799,
'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 8 -->

<div class="product-card electronics">

<span class="badge">SALE</span>

<img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600">

<h2>Modern Laptop</h2>

<div class="price">
₹49,999
</div>

<button onclick="addToCart(
8,
'Modern Laptop',
49999,
'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 9 -->

<div class="product-card fashion">

<img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=600">

<h2>Classic T-Shirt</h2>

<div class="price">
₹699
</div>

<button onclick="addToCart(
9,
'Classic T-Shirt',
699,
'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 10 -->

<div class="product-card fashion">

<img src="https://images.unsplash.com/photo-1548883354-7622d03aca27?w=600">

<h2>Stylish Sunglasses</h2>

<div class="price">
₹999
</div>

<button onclick="addToCart(
10,
'Stylish Sunglasses',
999,
'https://images.unsplash.com/photo-1548883354-7622d03aca27?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 11 -->

<div class="product-card electronics">

<img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600">

<h2>Smartphone</h2>

<div class="price">
₹24,999
</div>

<button onclick="addToCart(
11,
'Smartphone',
24999,
'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 12 -->

<div class="product-card electronics">

<img src="https://images.unsplash.com/photo-1585386959984-a41552231693?w=600">

<h2>Bluetooth Speaker</h2>

<div class="price">
₹1,299
</div>

<button onclick="addToCart(
12,
'Bluetooth Speaker',
1299,
'https://images.unsplash.com/photo-1585386959984-a41552231693?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 13 -->

<div class="product-card accessories">

<img src="https://images.unsplash.com/photo-1556306535-38febf6782e7?w=600">

<h2>Leather Wallet</h2>

<div class="price">
₹899
</div>

<button onclick="addToCart(
13,
'Leather Wallet',
899,
'https://images.unsplash.com/photo-1556306535-38febf6782e7?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 14 -->

<div class="product-card beauty">

<img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=600">

<h2>Beauty Collection</h2>

<div class="price">
₹1,599
</div>

<button onclick="addToCart(
14,
'Beauty Collection',
1599,
'https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 15 -->

<div class="product-card accessories">

<img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?w=600">

<h2>Classic Wrist Watch</h2>

<div class="price">
₹2,199
</div>

<button onclick="addToCart(
15,
'Classic Wrist Watch',
2199,
'https://images.unsplash.com/photo-1524805444758-089113d48a6d?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 16 -->

<div class="product-card fashion">

<img src="https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?w=600">

<h2>Denim Jeans</h2>

<div class="price">
₹1,499
</div>

<button onclick="addToCart(
16,
'Denim Jeans',
1499,
'https://images.unsplash.com/photo-1551488831-00ddcb6c6bd3?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 17 -->

<div class="product-card electronics">

<img src="https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=600">

<h2>Gaming Laptop</h2>

<div class="price">
₹69,999
</div>

<button onclick="addToCart(
17,
'Gaming Laptop',
69999,
'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 18 -->

<div class="product-card accessories">

<img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600">

<h2>Travel Shoes</h2>

<div class="price">
₹1,999
</div>

<button onclick="addToCart(
18,
'Travel Shoes',
1999,
'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 19 -->

<div class="product-card beauty">

<img src="https://images.unsplash.com/photo-1611930022073-b7a4ba5fcccd?w=600">

<h2>Luxury Perfume</h2>

<div class="price">
₹2,499
</div>

<button onclick="addToCart(
19,
'Luxury Perfume',
2499,
'https://images.unsplash.com/photo-1611930022073-b7a4ba5fcccd?w=200'
)">
Add to Cart 🛒
</button>

</div>


<!-- 20 -->

<div class="product-card electronics">

<span class="badge">POPULAR</span>

<img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=600">

<h2>Premium Gaming Headset</h2>

<div class="price">
₹2,999
</div>

<button onclick="addToCart(
20,
'Premium Gaming Headset',
2999,
'https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=200'
)">
Add to Cart 🛒
</button>

</div>


</section>


<!-- ================= CART ================= -->

<div
    class="cart-overlay"
    id="cartOverlay"
    onclick="closeCart()">
</div>


<div
    class="cart-drawer"
    id="cartDrawer">


<div class="cart-header">

<h2>
🛒 My Cart
</h2>

<button
    class="close-cart"
    onclick="closeCart()">

✕

</button>

</div>


<div id="cartItems">

<p style="text-align:center;color:#aaa;">
Your cart is empty 🛒
</p>

</div>


<div
    id="cartSummary"
    style="display:none;">


<div class="coupon">

<input
    type="text"
    id="coupon"
    placeholder="Coupon: NOVA10">

<button onclick="applyCoupon()">
Apply
</button>

</div>


<div class="summary">


<div class="summary-row">

<span>
Subtotal
</span>

<span>
₹<b id="subtotal">0</b>
</span>

</div>


<div class="summary-row">

<span>
Delivery
</span>

<span>
₹<b id="delivery">99</b>
</span>

</div>


<div class="summary-row">

<span>
Discount
</span>

<span>
− ₹<b id="discount">0</b>
</span>

</div>


<div class="summary-row grand-total">

<span>
Total
</span>

<span>
₹<b id="grandTotal">0</b>
</span>

</div>


</div>


<br>


<button onclick="goCheckout()">

Proceed to Checkout →

</button>


</div>

</div>


<!-- ================= CHECKOUT ================= -->

<section
    class="checkout-section"
    id="checkout">


<h2>
🚀 Checkout
</h2>

<p style="color:#bbb;margin-bottom:25px;">

Complete your details and select payment method.

</p>


<div class="form-group">

<label>
Full Name
</label>

<input
    type="text"
    id="customerName"
    placeholder="Enter your full name">

</div>


<div class="form-group">

<label>
Mobile Number
</label>

<input
    type="tel"
    id="customerPhone"
    placeholder="Enter mobile number">

</div>


<div class="form-group">

<label>
Email
</label>

<input
    type="email"
    id="customerEmail"
    placeholder="Enter email address">

</div>


<div class="form-group">

<label>
Delivery Address
</label>

<textarea
    id="customerAddress"
    rows="4"
    placeholder="House No, Street, City, Pincode">
</textarea>

</div>


<h3>
💳 Select Payment Method
</h3>


<div class="payment-methods">


<div
    class="payment-card"
    onclick="selectPayment('cod',this)">

💵
<br>
Cash on Delivery

</div>


<div
    class="payment-card"
    onclick="selectPayment('upi',this)">

📱
<br>
UPI

</div>


<div
    class="payment-card"
    onclick="selectPayment('card',this)">

💳
<br>
Debit / Credit Card

</div>


</div>


<!-- UPI -->

<div
    class="payment-details"
    id="upiDetails">

<h3>
📱 UPI Payment
</h3>

<br>

<input
    type="text"
    id="upiId"
    placeholder="Enter UPI ID e.g. name@upi"
    style="width:100%;padding:14px;border-radius:10px;border:none;">

</div>


<!-- CARD -->

<div
    class="payment-details"
    id="cardDetails">

<h3>
💳 Card Details
</h3>

<br>

<input
    type="text"
    id="cardNumber"
    placeholder="Card Number"
    maxlength="16"
    style="width:100%;padding:14px;margin-bottom:10px;border-radius:10px;border:none;">

<input
    type="text"
    placeholder="Card Holder Name"
    style="width:100%;padding:14px;margin-bottom:10px;border-radius:10px;border:none;">

<div style="display:flex;gap:10px;">

<input
    type="text"
    placeholder="MM/YY"
    style="width:50%;padding:14px;border-radius:10px;border:none;">

<input
    type="password"
    placeholder="CVV"
    maxlength="3"
    style="width:50%;padding:14px;border-radius:10px;border:none;">

</div>

</div>


<br>


<button onclick="placeOrder()">

🛍️ Place Order

</button>


</section>


<!-- ================= SUCCESS ================= -->

<section
    class="order-success"
    id="success">


<div class="success-icon">
✅
</div>


<h1>
Order Placed Successfully!
</h1>


<p>
Thank you for shopping with NovaCart.
</p>


<div class="order-number">

Order ID:
<b id="orderID"></b>

</div>


<p style="color:#bbb;">

Your order has been received and will be processed soon.

</p>


<br>


<button onclick="continueShopping()">

🛍️ Continue Shopping

</button>


</section>


<footer>

© 2026 NovaCart |
Online Shopping System |
BCA Project

</footer>


<!-- ================= JAVASCRIPT ================= -->

<script>


let cart = [];

let selectedPayment = "";

let discountAmount = 0;


/* ================= ADD TO CART ================= */

function addToCart(id,name,price,image) {

    let item =
        cart.find(product => product.id === id);


    if(item) {

        item.quantity++;

    }

    else {

        cart.push({

            id:id,

            name:name,

            price:price,

            image:image,

            quantity:1

        });

    }


    updateCart();

    openCart();

}


/* ================= UPDATE CART ================= */

function updateCart() {

    let container =
        document.getElementById("cartItems");

    let count = 0;

    let subtotal = 0;


    container.innerHTML = "";


    if(cart.length === 0) {

        container.innerHTML = `

        <p style="text-align:center;color:#aaa;padding:30px;">

        Your cart is empty 🛒

        </p>

        `;

        document.getElementById("cartSummary")
            .style.display = "none";

    }

    else {

        document.getElementById("cartSummary")
            .style.display = "block";


        cart.forEach(function(item,index) {


            count += item.quantity;


            subtotal +=
                item.price * item.quantity;


            container.innerHTML += `

            <div class="cart-product">

                <img src="${item.image}">


                <div class="cart-info">

                    <h4>
                    ${item.name}
                    </h4>


                    <div>
                    ₹${item.price.toLocaleString('en-IN')}
                    </div>


                    <div class="qty">

                        <button
                        onclick="decrease(${index})">
                        −
                        </button>


                        <b>
                        ${item.quantity}
                        </b>


                        <button
                        onclick="increase(${index})">
                        +
                        </button>

                    </div>


                    <button
                    class="remove"
                    onclick="removeItem(${index})">

                    Remove

                    </button>

                </div>

            </div>

            `;

        });

    }


    document.getElementById("cartCount")
        .innerText = count;


    calculateTotal(subtotal);

}


/* ================= QUANTITY ================= */

function increase(index) {

    cart[index].quantity++;

    updateCart();

}


function decrease(index) {

    cart[index].quantity--;


    if(cart[index].quantity <= 0) {

        cart.splice(index,1);

    }


    updateCart();

}


/* ================= REMOVE ================= */

function removeItem(index) {

    cart.splice(index,1);

    updateCart();

}


/* ================= TOTAL ================= */

function calculateTotal(subtotal) {

    let delivery =
        subtotal > 5000 ? 0 : 99;


    let total =
        subtotal +
        delivery -
        discountAmount;


    if(total < 0) {

        total = 0;

    }


    document.getElementById("subtotal")
        .innerText =
        subtotal.toLocaleString('en-IN');


    document.getElementById("delivery")
        .innerText =
        delivery.toLocaleString('en-IN');


    document.getElementById("discount")
        .innerText =
        discountAmount.toLocaleString('en-IN');


    document.getElementById("grandTotal")
        .innerText =
        total.toLocaleString('en-IN');

}


/* ================= COUPON ================= */

function applyCoupon() {

    let coupon =
        document.getElementById("coupon")
        .value
        .trim()
        .toUpperCase();


    if(coupon === "NOVA10") {


        let subtotal = 0;


        cart.forEach(function(item) {

            subtotal +=
                item.price *
                item.quantity;

        });


        discountAmount =
            Math.round(subtotal * 0.10);


        alert(
            "🎉 10% discount applied!"
        );


        calculateTotal(subtotal);

    }

    else {

        alert(
            "❌ Invalid coupon. Try NOVA10"
        );

    }

}


/* ================= OPEN CART ================= */

function openCart() {

    document.getElementById("cartDrawer")
        .classList.add("active");


    document.getElementById("cartOverlay")
        .classList.add("active");

}


/* ================= CLOSE CART ================= */

function closeCart() {

    document.getElementById("cartDrawer")
        .classList.remove("active");


    document.getElementById("cartOverlay")
        .classList.remove("active");

}


/* ================= SMART SEARCH ================= */

function smartSearch() {


    let searchBox =
        document.getElementById("search");


    let search =
        searchBox.value
        .trim()
        .toLowerCase();


    let products =
        document.querySelectorAll(".product-card");


    let result =
        document.getElementById("searchResult");


    let found = 0;


    products.forEach(function(product) {


        let productName =
            product
            .querySelector("h2")
            .innerText
            .toLowerCase();


        if(search === "") {

            product.style.display =
                "block";

        }

        else if(
            productName.includes(search)
        ) {

            product.style.display =
                "block";

            found++;

        }

        else {

            product.style.display =
                "none";

        }

    });


    if(search === "") {

        result.innerHTML =
            "🔎 Type a product name to search";

    }

    else if(found > 0) {

        result.innerHTML =
            "✅ " +
            found +
            " product(s) found";

    }

    else {

        result.innerHTML =
            "❌ No product found for: <b>" +
            searchBox.value +
            "</b>";

    }

}


/* ================= CATEGORY FILTER ================= */

function filterProducts(category) {


    document.getElementById("search")
        .value = "";


    document.getElementById("searchResult")
        .innerHTML =
        "🔎 Type a product name to search";


    let products =
        document.querySelectorAll(".product-card");


    products.forEach(function(product) {


        if(
            category === "all" ||
            product.classList.contains(category)
        ) {

            product.style.display =
                "block";

        }

        else {

            product.style.display =
                "none";

        }

    });

}


/* ================= CHECKOUT ================= */

function goCheckout() {


    if(cart.length === 0) {

        alert(
            "Please add a product first."
        );

        return;

    }


    closeCart();


    document.getElementById("productGrid")
        .style.display = "none";


    document.querySelector(".categories")
        .style.display = "none";


    document.querySelector(".search-area")
        .style.display = "none";


    document.querySelector(".hero")
        .style.display = "none";


    document.getElementById("checkout")
        .style.display = "block";


    window.scrollTo({

        top:
        document.getElementById("checkout")
        .offsetTop - 30,

        behavior:"smooth"

    });

}


/* ================= PAYMENT ================= */

function selectPayment(type,element) {


    selectedPayment = type;


    document
    .querySelectorAll(".payment-card")
    .forEach(function(card) {

        card.classList.remove(
            "selected"
        );

    });


    element.classList.add(
        "selected"
    );


    document.getElementById("upiDetails")
        .style.display = "none";


    document.getElementById("cardDetails")
        .style.display = "none";


    if(type === "upi") {

        document.getElementById("upiDetails")
            .style.display = "block";

    }


    if(type === "card") {

        document.getElementById("cardDetails")
            .style.display = "block";

    }

}


/* ================= PLACE ORDER ================= */

function placeOrder() {


    let name =
        document.getElementById(
            "customerName"
        ).value.trim();


    let phone =
        document.getElementById(
            "customerPhone"
        ).value.trim();


    let email =
        document.getElementById(
            "customerEmail"
        ).value.trim();


    let address =
        document.getElementById(
            "customerAddress"
        ).value.trim();


    if(
        name === "" ||
        phone === "" ||
        email === "" ||
        address === ""
    ) {

        alert(
            "⚠️ Please fill all customer details."
        );

        return;

    }


    if(selectedPayment === "") {

        alert(
            "⚠️ Please select a payment method."
        );

        return;

    }


    if(selectedPayment === "upi") {


        let upi =
            document.getElementById(
                "upiId"
            ).value.trim();


        if(upi === "") {

            alert(
                "Please enter your UPI ID."
            );

            return;

        }

    }


    if(selectedPayment === "card") {


        let card =
            document.getElementById(
                "cardNumber"
            ).value.trim();


        if(card.length < 12) {

            alert(
                "Please enter a valid card number."
            );

            return;

        }

    }


    let orderID =
        "NC" +
        Math.floor(
            100000 +
            Math.random() * 900000
        );


    document.getElementById("orderID")
        .innerText = orderID;


    document.getElementById("checkout")
        .style.display = "none";


    document.getElementById("success")
        .style.display = "block";


    cart = [];

    discountAmount = 0;


    updateCart();


    window.scrollTo({

        top:0,

        behavior:"smooth"

    });

}


/* ================= CONTINUE SHOPPING ================= */

function continueShopping() {


    document.getElementById("success")
        .style.display = "none";


    document.getElementById("productGrid")
        .style.display = "grid";


    document.querySelector(".categories")
        .style.display = "block";


    document.querySelector(".search-area")
        .style.display = "block";


    document.querySelector(".hero")
        .style.display = "block";


    window.scrollTo({

        top:0,

        behavior:"smooth"

    });

}


/* ================= HOME ================= */

function goHome() {


    document.getElementById("productGrid")
        .style.display = "grid";


    document.querySelector(".categories")
        .style.display = "block";


    document.querySelector(".search-area")
        .style.display = "block";


    document.querySelector(".hero")
        .style.display = "block";


    document.getElementById("checkout")
        .style.display = "none";


    document.getElementById("success")
        .style.display = "none";


    window.scrollTo({

        top:0,

        behavior:"smooth"

    });

}

</script>


</body>
</html>