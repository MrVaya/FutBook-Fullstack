<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('Asset/Css/themify-icons/themify-icons.css') }}"> <!-- Themify icons-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}"> <!-- Bootstrap main CSS-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css') }}"> <!-- Bootstrap grid-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/style.css') }}"> <!-- Custom css-->
    <title>Futsal Booking</title>

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
    <!-- Sliders  section -->


    <!-- Home Section -->
    <section id="home" class="pt-5 overflow-hidden">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="hero" style="background-image: url('{{ asset('Asset/image/bfit.jpg') }}');">
                        <div class="container hero-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>Welcome to Futsal Booking</h1>
                                    <p>One step away from booking your favorite futsal venue.</p>
                                    <a href="#Products" class="btn btn-danger text-uppercase mt-4">Explore Futsals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="hero" style="background-image: url('{{ asset('Asset/image/Chihuahua-sitting-outdoors-in-the-snow-in-a-pink-winter-coat.jpg') }}');">
                        <div class="container hero-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>Discover New Venues</h1>
                                    <p>Book the best futsal grounds near you.</p>
                                    <a href="#Products" class="btn btn-danger text-uppercase mt-4">Find Futsals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- Products Section -->


    <section id="Products" class="py-5 mt-5">
        <div class="container mx-auto px-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <small class="text-muted">Tagline</small>
                    <h2 class="fw-bold futsal-heading">Futsal</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div>
                    <a href="{{ route('futsal-venue') }}" class="btn btn-outline-dark">View all</a>
                </div>
            </div>
            <div id="futsal-products-container" class="row">
                <!-- Product cards will be inserted here by JavaScript -->
            </div>
        </div>
    </section>

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
            // Only display first 8 futsals
            const limitedFutsals = futsals.slice(0, 8);
            futsalProductsContainer.innerHTML = limitedFutsals.map(futsal => createFutsalCard(futsal)).join('');
        }
    </script>

    <!-- Offer Section -->

    <div class="offers">
        <div class="container">
            <h2 class="fw-bold mb-4">Upcoming tournaments</h2>
            <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Offer Box 1 as Carousel Item -->
                    <div class="carousel-item active">
                        <div class="offer-box">
                            <div class="offer-inner">
                                <div class="offer-image position-relative overflow-hidden">
                                    <img src="{{ asset('Asset/image/20250123_monocle_ecom_arpenteu-67eacdb6a66c8.jpg') }}" alt="offer"
                                        class="img-fluid">
                                    <div class="offer-overlay"></div>
                                    <div class="offer-info"> <!-- <--- THIS IS WHERE THE offer-info DIV NEEDS TO BE MOVED -->
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">Sale 30%</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                            <button type="button" class="btn offer-btn text-uppercase mt-4">Shop Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer Box 2 as Carousel Item -->
                    <div class="carousel-item">
                        <div class="offer-box">
                            <div class="offer-inner">
                                <div class="offer-image position-relative overflow-hidden">
                                    <img src="{{ asset('Asset/image/bfit.jpg') }}" alt="offer"
                                        class="img-fluid">
                                    <div class="offer-overlay"></div>
                                    <div class="offer-info"> <!-- <--- THIS IS WHERE THE offer-info DIV NEEDS TO BE MOVED -->
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize"></p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                            <button type="button" class="btn offer-btn text-uppercase mt-4">Shop Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Offer Box 3 as Carousel Item -->


                    <button class="carousel-control-prev" type="button" data-bs-target="#offerCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#offerCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        <!-- Contact section-->



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

    <script src="{{ asset('Asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Asset/js/script.js') }}"></script>
</body>

</html>