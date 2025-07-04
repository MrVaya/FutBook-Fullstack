<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="{{ asset('Asset/Css/themify-icons/themify-icons.css') }}"> <!-- Themify icons-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}"> <!-- Bootstrap main CSS-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css') }}"> <!-- Bootstrap grid-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/style.css') }}"> <!-- Custom css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* Combined Styles from index.html and Add-to-Cart.html */

        /* Navbar Base Styles */
        .navbar {
            padding: 0.5rem 0;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            transition: all 0.3s ease;
        }

        .nav-link {
            position: relative;
            padding: 0.5rem 1rem !important;
            font-weight: 500;
            color: #333 !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #dc3545 !important;
        }

        .nav-link.active {
            color: #dc3545 !important;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #dc3545;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
        }

        /* Mobile Navigation Styles */
        @media (max-width: 991px) {
            .navbar {
                padding: 0.5rem 1rem;
            }

            .navbar-brand img {
                height: 60px;
                width: 100px;
            }

            .mobile-nav {
                margin-left: 0 !important;
                text-align: left;
                padding: 1rem 0;
            }
            
            .navbar-collapse {
                background: white;
                padding: 1rem 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                z-index: 1000;
            }

            .mobile-nav .nav-item {
                margin: 0.5rem 0;
                border-bottom: 1px solid #eee;
            }

            .mobile-nav .nav-item:last-child {
                border-bottom: none;
            }

            .mobile-nav .nav-link {
                padding: 0.75rem 1rem !important;
                display: block;
            }

            .navbar-toggler {
                border: none;
                padding: 0.5rem;
            }

            .navbar-toggler:focus {
                box-shadow: none;
            }

            /* Hide special section in mobile */
            .offers {
                display: none;
            }
        }

        /* Small Mobile Devices */
        @media (max-width: 576px) {
            .navbar-brand img {
                height: 50px;
                width: 80px;
            }

            .mobile-nav .nav-link {
                font-size: 0.9rem;
            }
        }

        /* Large Screens */
        @media (min-width: 992px) {
            .navbar {
                padding: 1rem 0;
            }

            .navbar-brand img {
                height: 100px;
                width: 150px;
            }

            .nav-link {
                margin: 0 0.5rem;
            }

            .navbar-collapse {
                justify-content: flex-end;
            }
        }

        /* Existing styles from Add-to-Cart.html */
        body {
            background: #e9ecef; /* very light gray */
        }

        .cart-container {
            display: flex;
            gap: 2.5rem;
            max-width: 1100px;
            margin: 3rem auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            background: none;
        }

        .cart-section {
            background: #fff;
            flex: 2;
            padding: 2.5rem 2rem 2rem 2.5rem;
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .payment-section {
            flex: 1.1;
            background: linear-gradient(135deg, #232323 80%, #333 100%);
            color: #fff;
            padding: 2.5rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-width: 0;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            box-shadow: -8px 0 24px rgba(0,0,0,0.08);
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            background: #f7f7f7;
            border-radius: 12px;
            margin-bottom: 1.2rem;
            padding: 1.2rem 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }

        .product-image {
            max-height: 300px;
            width: auto;
            object-fit: contain;
            margin: 0 auto;
            display: block;
        }

        .col-2 {
            min-width: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-title {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }

        .product-desc, .product-ref {
            font-size: 0.9rem;
            color: #888;
        }

        .quantity-controls {
            margin-left: auto;
            margin-right: 1.5rem;
        }

        .product-price {
            font-weight: 600;
            font-size: 1.1rem;
            margin-right: 1.5rem;
        } 

        .remove-btn {
            font-size: 1.5rem;
            color: #bbb;
            cursor: pointer;
            transition: color 0.2s;
        }

        .remove-btn:hover {
            color: #dc3545;
        }

        .card-details-header {
            color: #ffc107;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 2.5rem;
        }

        .card-type-icons {
            display: flex;
            gap: 1.2rem;
            margin-bottom: 2.5rem;
        }

        .card-icon {
            width: 48px;
            height: 32px;
            background: #444;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.1rem;
            opacity: 0.7;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.2s;
        }

        .card-icon.active, .card-icon:hover {
            background: #ffc107;
            color: #232323;
            opacity: 1;
            border: 2px solid #fff;
        }

        .form-label {
            color: #ccc;
            margin-bottom: 0.3rem;
            font-size: 1rem;
            margin-top: 1.2rem;
        }

        .form-control {
            background: transparent;
            border: none;
            border-bottom: 2px solid #555;
            color: #fff;
            padding: 0.6rem 0;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .form-control:focus {
            border-color: #ffc107;
            outline: none;
        }

        .checkout-btn {
            background: #ffc107;
            color: #232323;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            padding: 1rem 0;
            margin-top: 2.5rem;
            font-size: 1.2rem;
            transition: background 0.2s;
        }

        .checkout-btn:hover {
            background: #ffdb4d;
        }

        .subtotal {
            margin-top: 2rem;
            font-weight: 700;
            font-size: 1.1rem;
            text-align: right;
        }

        .back-link {
            margin-top: 2rem;
            color: #888;
            text-decoration: none;
            font-size: 1rem;
            display: inline-block;
        }

        .back-link:hover {
            color: #232323;
        }

        /* Media Queries from Contact-us.html and index.html */
        @media (max-width: 991px) {
            .cart-container {
                flex-direction: column;
                gap: 0;
            }

            .payment-section {
                border-top-left-radius: 0;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
                box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            }

            .cart-section {
                 padding: 1.5rem;
            }

             .payment-section {
                 padding: 1.5rem;
             }
        }

    </style>
</head>

<body>
<section id="header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('Asset/image/logo.png') }}" height="100px" width="150px" alt="Ecommerce Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-align-justify"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mobile-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Products">Futsal Venue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart') }}">
                                <i class="ti-shopping-cart"></i>
                                <span class="cart-count">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container-fluid">
        <div class="cart-container">
            <div class="row g-0">
                <!-- Cart Section -->
                <div class="col-lg-7">
                    <div class="cart-section">
                        <!-- Header -->
                        <div class="d-flex align-items-center mb-4">
                            <div class="logo me-3">Q</div>
                            <h4 class="mb-0">Your Shopping Cart</h4>
                        </div>
                        
                        <!-- Cart Items -->
                        <div class="cart-items">
                            <!-- Cart items will be dynamically populated here -->
                        </div>
                        
                        <!-- Back to Shop -->
                        <a href="#" class="back-link">
                            <i class="fas fa-arrow-left"><a href="index.html">Back to Shop</a></i>
                            
                        </a>
                        
                        <!-- Subtotal -->
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
                            <span>Subtotal:</span>
                            <span class="subtotal"> </span>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Section -->
                <div class="col-lg-5">
                    <div class="payment-section">
                        <h5 class="card-details-header">Card Details</h5>
                        
                        <!-- Card Type Selection -->
                        <div class="mb-4">
                            <label class="form-label">Select Payment Method</label>
                            <div class="card-type-icons">
                                <div class="card-icon active" data-method="VISA">VISA</div>
                                <div class="card-icon" data-method="Esewa">Esewa</div>
                                
                            </div>
                        </div>
                        
                        <!-- Card Fields -->
                        <div class="card-fields">
                            <div class="mb-3">
                                <label for="card-number" class="form-label">Card Number</label>
                                <input type="text" class="form-control" id="card-number" placeholder="XXXX XXXX XXXX XXXX">
                            </div>
                            <div class="mb-3">
                                <label for="card-name" class="form-label">Cardholder Name</label>
                                <input type="text" class="form-control" id="card-name" placeholder="Cardholder Name">
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="expiry-date" class="form-label">Expiry Date</label>
                                    <input type="text" class="form-control" id="expiry-date" placeholder="MM/YY">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="XXX">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Esewa QR Section -->
                        <div class="esewa-qr" style="display: none; text-align: center;">
                            <p class="form-label" style="color:#ffc107;">Scan to Pay with Esewa</p>
                            <img id="esewa-qr-img" src="" alt="Esewa QR" style="max-width: 180px; margin-bottom: 1rem;">
                            <div class="subtotal-qr" style="color:#fff; font-weight:600;"></div>
                        </div>

                        <button class="btn checkout-btn">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="min-vh-100 d-flex flex-column" style="height: 100vh; min-height: 100vh;">

        <div class="flex-shrink-0 d-flex align-items-center justify-content-center hero-gradient welcome-section-bg"
            style="flex: 0 0 50vh; min-height: 0;">
            <div class="text-center px-4">
                <h1 class="display-2 fw-bold mb-4 text-dark">
                    Welcome to Your Store
                </h1>
                <p class="fs-4 text-muted mb-5 mx-auto" style="max-width: 48rem;">
                    Discover amazing products and exclusive deals. Start building your amazing project here!
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#Products" class="btn btn-danger btn-lg px-4 py-2 fw-semibold text-uppercase">Shop
                        Now</a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-0 d-flex flex-column justify-content-center"
            style="flex: 0 0 50vh; min-height: 0; background: #f5f5f5;">
            <div class="container h-100 d-flex flex-column justify-content-center">
                <div class="row flex-grow-1 align-items-center">
                    <!-- Logo and Theme -->
                    <div class="col-lg-4 mb-4">
                        <div class="logo mb-3">
                            <img src="https://via.placeholder.com/150x50" alt="logo" class="img-fluid"
                                style="max-height: 60px;">
                        </div>
                        <div class="theme">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut
                                quidem eum est provident, saepe expedita, ea debitis aliquam consequatur cupiditate
                                iure nulla eveniet, alias enim asperiores consectetur maxime. Provident, asperiores.
                            </p>
                        </div>
                        <div class="social-icons mt-3">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-twitter-x"></i>
                        </div>
                    </div>

                    <!-- Explore Links -->
                    <div class="col-lg-4 mb-4">
                        <h5 class="mb-3 fw-bold">EXPLORE</h5>
                        <div class="explore">
                            <ul class="footer-list">
                                <li><a href="">SHOP ALL</a></li>
                                <li><a href="./index.html">HOME</a></li>
                                <li><a href="">CATEGORY</a></li>
                                <li><a href="./about.html">ABOUT COMPANY</a></li>
                                <li><a href="./Contact-us.html">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="col-lg-4 mb-4">
                        <h5 class="mb-3 fw-bold">SUPPORT</h5>
                        <ul class="footer-list">
                            <li>CONTACT: +977 9846983690</li>
                            <li><a href="">PAYMENT POLICY</a></li>
                            <li><a href="">RETURNS & EXCHANGE</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="row">
                    <div class="col-12 text-center copyright">
                        <h6 class="fw-bold">COPYRIGHT 2025 / POWERED BY MR.VAYA</h6>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="Asset/Css/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Update cart count
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            document.querySelector('.cart-count').textContent = totalItems;
        }

        // Initialize cart count on page load
        document.addEventListener('DOMContentLoaded', updateCartCount);

        // Add to cart functionality (This is for index.html, not strictly needed here but doesn't hurt)
        function addToCart(product) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existingItem = cart.find(item => item.ref === product.ref);

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    color: product.color || 'Default',
                    ref: Math.random().toString(36).substr(2, 9), // Generate unique reference
                    quantity: 1
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount(); // Update count in navbar

            // Show confirmation message
            alert('Product added to cart!');
        }

        // Function to render cart items on the cart page
        function renderCartItems() {
            const cartItemsContainer = document.querySelector('.cart-items');
            // Clear existing items before rendering
            cartItemsContainer.innerHTML = ''; 

            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
                document.querySelector('.subtotal').textContent = 'Rs. 0.00';
                return;
            }

            cart.forEach((item, index) => {
                const cartItemHTML = `
                    <div class="cart-item" data-index="${index}">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4">
                                <img src="${item.image}" alt="${item.name}" class="img-fluid rounded product-image">
                            </div>
                            <div class="col-md-4 col-8">
                                <h6 class="product-title">${item.name}</h6>
                                <small class="product-desc">${item.color}</small><br>
                                <small class="product-ref">Ref: ${item.ref}</small>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                <div class="quantity-controls d-flex align-items-center">
                                    <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity(${index}, -1)">-</button>
                                    <span class="mx-2">${item.quantity}</span>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity(${index}, 1)">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0 text-end">
                                <strong class="product-price">Rs. ${(item.price * item.quantity).toFixed(2)}</strong>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0 text-end">
                                <button class="btn btn-sm btn-outline-danger remove-btn" onclick="removeItem(${index})">Remove</button>
                            </div>
                        </div>
                    </div>
                `;
                cartItemsContainer.innerHTML += cartItemHTML;
            });

            updateSubtotal();
        }

        // Function to update quantity
        function updateQuantity(index, change) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart[index].quantity + change > 0) {
                cart[index].quantity += change;
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCartItems();
            }
        }

        // Function to remove item
        function removeItem(index) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            renderCartItems();
            updateCartCount(); // Update cart count in navbar after removing item
        }

        // Function to update subtotal
        function updateSubtotal() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
            document.querySelector('.subtotal').textContent = 'Rs. ' + subtotal.toFixed(2);
        }

        // Initialize cart display on page load
        document.addEventListener('DOMContentLoaded', () => {
             updateCartCount(); // Update navbar count
             renderCartItems(); // Render items on cart page
             setupPaymentMethodSwitching(); // Setup payment method switching
        });

        // Add click handlers to product images (This is for index.html, not needed here)
        // document.querySelectorAll('.card-img-top').forEach(img => {
        //     img.style.cursor = 'pointer';
        //     img.addEventListener('click', function () {
        //         const card = this.closest('.card');
        //         const productName = card.querySelector('.card-title').textContent.split('Rs.')[0].trim();
        
        //         // Find the product in the products array by name
        //         const product = products.find(p => p.name === productName);
        
        //         if (product) {
        //             // Redirect to Product Header page with product ID in the URL
        //             window.location.href = `Product Header.html?id=${product.id}`;
        //         } else {
        //             alert('Product details not found for routing!');
        //             console.error('Product not found for name:', productName);
        //         }
        //     });
        // });

        // Function to setup payment method switching
        function setupPaymentMethodSwitching() {
            document.querySelectorAll('.card-icon').forEach(icon => {
                icon.addEventListener('click', function() {
                    document.querySelectorAll('.card-icon').forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    const method = this.getAttribute('data-method');
                    const cardFields = document.querySelector('.card-fields');
                    const esewaQR = document.querySelector('.esewa-qr');

                    if (method === "Esewa") {
                        cardFields.style.display = "none";
                        esewaQR.style.display = "block";
                        // You might want to generate or load the QR code here
                         updateSubtotal(); // Update subtotal for QR display
                         showEsewaQR();
                    } else if (method === "VISA") {
                        cardFields.style.display = "block";
                        esewaQR.style.display = "none";
                    }
                    // Add more conditions for other payment methods if needed
                });
            });
        }

         // Function to show Esewa QR (example - replace with actual QR generation/loading)
         function showEsewaQR() {
             const subtotal = parseFloat(document.querySelector('.subtotal').textContent.replace('Rs. ', ''));
             // In a real application, you would generate a QR code based on the subtotal and other order details
             // This is a placeholder using a generic QR code API
             const qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=EsewaPay:${subtotal}`;
             document.getElementById('esewa-qr-img').src = qrUrl;
              document.querySelector('.subtotal-qr').textContent = 'Amount: Rs. ' + subtotal.toFixed(2);
         }
    </script>
</body>
</html>
