<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About-Us</title>
    <link rel="stylesheet" href="{{ asset('Asset/Css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
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
    </style>
</head>
<body>
<section id="header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <div class="container"> 
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('Asset/image/logo.png') }}" height="40px" width="60px" alt=" Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-align-justify"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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

    <!-- About Us Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="Asset/image/about-us.jpg" alt="About Us" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">About Our Ecommerce</h2>
                    <p class="mb-3">We are dedicated to providing the best online shopping experience. Our mission is to offer quality products, fast delivery, and excellent customer service. We believe in making shopping easy, enjoyable, and accessible for everyone.</p>
                    <ul class="list-unstyled mb-4">
                        <li><span class="text-success me-2">&#10003;</span> Wide range of products</li>
                        <li><span class="text-success me-2">&#10003;</span> Fast and reliable shipping</li>
                        <li><span class="text-success me-2">&#10003;</span> 24/7 customer support</li>
                    </ul>
                    <a href="index.html#Products" class="btn btn-danger">Shop Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Placeholder -->
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h3 class="fw-bold mb-4">Meet Our Team</h3>
            <p class="mb-0">(Team member profiles coming soon...)</p>
        </div>
    </section>

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

        
           <!--Footer Section-->



           <div class="min-vh-100 d-flex flex-column" style="height: 100vh; min-height: 100vh;">
            <!-- Main Content -->
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
                style="flex: 0 0 50vh; min-height: 0; background: #000; color: #fff;">
                <div class="container h-100 d-flex flex-column justify-content-center">
                    <div class="row flex-grow-1 align-items-center">
                        <!-- Logo and Theme -->
                        <div class="col-lg-4 mb-4">
                            <div class="logo mb-3">
                                <img src="{{ asset('Asset/image/logo.png') }}" alt="logo" class="img-fluid"
                                    style="max-height: 60px;">
                            </div>
                            <div class="theme">
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut
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
                        <!-- Company Info -->
                        <div class="col-lg-4 mb-4">
                            <h5 class="text-white mb-3">Company</h5>
                            <ul class="list-unstyled footer-list">
                                <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                                <li><a href="#" class="text-white text-decoration-none">Our Services</a></li>
                                <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                                <li><a href="#" class="text-white text-decoration-none">Affiliate Program</a></li>
                            </ul>
                        </div>
                        <!-- Quick Links -->
                        <div class="col-lg-4 mb-4">
                            <h5 class="text-white mb-3">Quick Links</h5>
                            <ul class="list-unstyled footer-list">
                                <li><a href="#" class="text-white text-decoration-none">FAQs</a></li>
                                <li><a href="#" class="text-white text-decoration-none">Shipping</a></li>
                                <li><a href="#" class="text-white text-decoration-none">Returns</a></li>
                                <li><a href="#" class="text-white text-decoration-none">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center mt-4 pt-4 border-top border-secondary">
                        <p class="mb-0 text-white">&copy; 2023 Your Store. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
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

        // Add to cart functionality
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
            updateCartCount();

            // Show confirmation message
            alert('Product added to cart!');
        }

        // Add click handlers to all Add to Cart buttons
        document.querySelectorAll('.card-footer .btn').forEach(button => {
            button.addEventListener('click', function () {
                const card = this.closest('.card');
                const product = {
                    name: card.querySelector('.card-title').textContent.split('Rs.')[0].trim(),
                    price: parseFloat(card.querySelector('.card-title').textContent.split('Rs.')[1].trim()),
                    image: card.querySelector('.card-img-top').src,
                    ref: Math.random().toString(36).substr(2, 9), // Generate unique reference
                    color: card.querySelector('.text-muted').textContent
                };
                addToCart(product);
            });
        });

        // Add click handlers to product images
        document.querySelectorAll('.card-img-top').forEach(img => {
            img.style.cursor = 'pointer';
            img.addEventListener('click', function () {
                const card = this.closest('.card');
                const productName = card.querySelector('.card-title').textContent.split('Rs.')[0].trim();

                // Find the product in the products array by name
                const product = products.find(p => p.name === productName);

                if (product) {
                    // Redirect to Product Header page with product ID in the URL
                    window.location.href = `Product Header.html?id=${product.id}`;
                } else {
                    alert('Product details not found for routing!');
                    console.error('Product not found for name:', productName);
                }
            });
        });
    </script>
</body>
</html>     