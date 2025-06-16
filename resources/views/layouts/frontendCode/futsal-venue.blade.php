<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('Asset/Css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/style.css') }}">
    <title>All Futsal Venues</title>
</head>

<body>
    <!-- Nav bar-->
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

    <!-- All Futsals Section -->
    <section id="Products" class="py-5 mt-5">
        <div class="container mx-auto px-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold futsal-heading">All Futsal Venues</h2>
                    <p>Browse through our complete collection of futsal venues.</p>
                </div>
            </div>
            <div id="futsal-products-container" class="row">
                <!-- All futsal cards will be inserted here by JavaScript -->
            </div>
        </div>
    </section>

    <script src="{{ asset('Asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Asset/js/futsal-data.js') }}"></script>
    <script>
        const FUTSAL_DETAILS_URL_BASE = "{{ url('futsal-details') }}";

        function createFutsalCard(futsal) {
            return `
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100">
                        <img src="${futsal.image}" class="card-img-top" alt="${futsal.name}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">${futsal.name}</h5>
                            <div class="amenities mb-3">
                                ${futsal.amenities.map(amenity => `
                                    <span class="badge bg-light text-dark me-2">
                                        <i class="bi ${amenity.icon}"></i> ${amenity.name}
                                    </span>
                                `).join('')}
                            </div>
                            <div class="mb-3">
                                <span class="h5 mb-0">Rs. ${futsal.price}/hr</span>
                            </div>
                            <a href="${FUTSAL_DETAILS_URL_BASE}/${futsal.id}" class="btn btn-primary w-100 d-block mt-3">Book Now</a>
                        </div>
                    </div>
                </div>
            `;
        }

        // Display all futsals
        const futsalProductsContainer = document.querySelector('#futsal-products-container');
        if (futsalProductsContainer) {
            futsalProductsContainer.innerHTML = futsals.map(futsal => createFutsalCard(futsal)).join('');
        }
    </script>
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
</body>
</html> 