<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="Asset/Css/themify-icons/themify-icons.css"> <!-- Themify icons-->
    <link rel="stylesheet" href="Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css"> <!-- Bootstrap main CSS-->
    <link rel="stylesheet" href="Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css"> <!-- Bootstrap grid-->
    <link rel="stylesheet" href="Asset/Css/style.css"> <!-- Custom css-->
    <link rel="stylesheet" href="Asset/Css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Futsal Booking</title>
</head>

<body>
<!-- Nav bar-->

    <section id="header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="Asset/image/logo.png" height="100px" width="150px" alt="Ecommerce Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-align-justify"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mobile-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Products">Futsal Venue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Contact-us.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Add-to-Cart.html">
                                <i class="ti-shopping-cart"></i>
                                <span class="cart-count">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Sliders  section -->

    <!-- Home Section -->
    <section id="home" class="home pt-5 overflow-hidden">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="home-banner-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h1> Fustal Women</h1>
                                    <h2>52% Discount For This Season</h2>
                                    <a href="#Products" class="btn btn-danger text-uppercase mt-4">Our products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="home-banner-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h1>Mens Fustal</h1>
                                    <h2>Easy way to Book your Futsal</h2>
                                    <a href="#Products" class="btn btn-danger text-uppercase mt-4">Our Futsal</a>
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







        <!-- Products Section -->




        <section id="Products" class="py-5 mt-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <small class="text-muted">Tagline</small>
                        <h2 class="fw-bold">Products</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div>
                        <a href="#" class="btn btn-outline-dark">View all</a>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>BOYS SECTION</h2>
                    <div>
                        <a href="#Products" class="btn btn-outline-dark">View all</a>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Product Card Start -->
                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            <a href="futsal-details.html?id=1">
                                <img src="Asset/image/bfit.jpg" class="card-img-top"
                                    alt="Product Image">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">Bfit Futsal <span class="float-end">Rs.2000</span> </h6>
                                <small class="text-muted">Variant</small>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-dark w-100">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product Card End -->

                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            <a href="futsal-details.html?id=2">
                                <img src="Asset/image/20250123_monocle_ecom_arpenteu-67eacdb6a66c8.jpg" class="card-img-top"
                                    alt="Product Image">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">HUBA JACKET <span class="float-end">Rs.2000</span> </h6>
                                <small class="text-muted">Variant</small>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-dark w-100">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            <a href="futsal-details.html?id=3">
                                <img src="Asset/image/20250123_monocle_ecom_arpenteu-67eacdb6a66c8.jpg" class="card-img-top"
                                    alt="Product Image">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">HUBA JACKET <span class="float-end">Rs.2000</span> </h6>
                                <small class="text-muted">Variant</small>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-dark w-100">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            <a href="futsal-details.html?id=4">
                                <img src="Asset/image/214884d772878b6cc854f09b1be83e0b.jpg_720x720q80.jpg"
                                    class="card-img-top" alt="Product Image">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1"> BURBERRY BLUE JACKET <span class="float-end">Rs.3500</span>
                                </h6>
                                <small class="text-muted">Variant</small>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-dark w-100">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            <a href="futsal-details.html?id=5">
                                <img src="Asset/image/258_de35f13639-rolf-smoothblue.jpg" class="card-img-top"
                                    alt="Product Image">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">LEVIS JACKET <span class="float-end">Rs.3000</span></h6>
                                <small class="text-muted">Variant</small>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-dark w-100">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            <a href="futsal-details.html?id=6">
                                <img src="Asset/image/71c6gbTo6PL._AC_SL1500_.jpg" class="card-img-top"
                                    alt="Product Image">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">BLACK JACKET<span class="float-end">Rs.3000</span></h6>
                                <small class="text-muted">Variant</small>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-dark w-100">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            <a href="futsal-details.html?id=7">
                                <img src="Asset/image/HUBA BLACK Tshirt.avif" class="card-img-top" alt="Product Image">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">HUBA T-SHIRT <span class="float-end">Rs.1800</span></h6>
                                <small class="text-muted">Variant</small>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-dark w-100">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="card h-100">
                            <a href="futsal-details.html?id=8">
                                <img src="Asset/image/Huba red jacket.avif" class="card-img-top" alt="Product Image">
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mb-1">HUBA RED JACKET<span class="float-end">Rs.2550</span></h6>
                                <small class="text-muted">Variant</small>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-dark w-100">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Duplicate -->

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2>Girls Section</h2>
                        <div>
                            <a href="#Products" class="btn btn-outline-dark">View all</a>
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Girls Section Product Cards -->
                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <a href="futsal-details.html?id=9">
                                    <img src="Asset/image/female jacket pink.webp" class="card-img-top"
                                        alt="Product Image">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">BURBERRY PINK JACKET <span class="float-end">Rs.5500</span> </h6>
                                    <small class="text-muted">Variant</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark w-100">Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <a href="futsal-details.html?id=10">
                                    <img src="Asset/image/female jacket blue1.jpg" class="card-img-top"
                                        alt="Product Image">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">BURBERRY BLUE JACKET <span class="float-end">Rs.5500</span> </h6>
                                    <small class="text-muted">Variant</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark w-100">Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <a href="futsal-details.html?id=11">
                                    <img src="Asset/image/female jacket gray 1.jpg" class="card-img-top"
                                        alt="Product Image">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">BURBERRY GRAY JACKET <span class="float-end">Rs.4500</span> </h6>
                                    <small class="text-muted">Variant</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark w-100">Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <a href="futsal-details.html?id=12">
                                    <img src="Asset/image/Female jacket 1.jpg"
                                        class="card-img-top" alt="Product Image">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">ASL BROWN JACKET <span class="float-end">Rs.4500</span>
                                    </h6>
                                    <small class="text-muted">Variant</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark w-100">Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <a href="futsal-details.html?id=13">
                                    <img src="Asset/image/Female jacket 12.jpg" class="card-img-top"
                                        alt="Product Image">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">HUBA GREEN JACKET <span class="float-end">Rs.3500</span></h6>
                                    <small class="text-muted">Variant</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark w-100">Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <a href="futsal-details.html?id=14">
                                    <img src="Asset/image/female jacket 3.jpg" class="card-img-top"
                                        alt="Product Image">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">PUFFER JACKET<span class="float-end">Rs.3500</span></h6>
                                    <small class="text-muted">Variant</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark w-100">Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <a href="futsal-details.html?id=15">
                                    <img src="Asset/image/Female jacket 12.jpg" class="card-img-top" alt="Product Image">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">HUBA GREEN JACKET <span class="float-end">Rs.3500</span></h6>
                                    <small class="text-muted">Variant</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark w-100">Add to cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="card h-100">
                                <a href="futsal-details.html?id=16">
                                    <img src="Asset/image/female jacket 3.jpg" class="card-img-top" alt="Product Image">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-title mb-1">PUFFER JACKET<span class="float-end">Rs.3500</span></h6>
                                    <small class="text-muted">Variant</small>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-outline-dark w-100">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Offer Section -->

        <div class="offers">
            <div class="container">
                    <div id="offerCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Offer Box 1 as Carousel Item -->
                        <div class="carousel-item active">
                            <div class="offer-box">
                                <div class="offer-inner">
                                    <div class="offer-image position-relative overflow-hidden">
                                        <img src="Asset/image/20250123_monocle_ecom_arpenteu-67eacdb6a66c8.jpg" alt="offer"
                                            class="img-fluid">
                                        <div class="offer-overlay"></div>
                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">Sale 30%</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                            <button type="button" class="btn offer-btn text-uppercase mt-4">Shop Now</button>
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
                                        <img src="Asset/image/female jacket 3.jpg" alt="offer"
                                            class="img-fluid">
                                        <div class="offer-overlay"></div>
                                    </div>
                                    <div class="offer-info">
                                        <div class="offer-info-inner">
                                            <p class="heading-bigger text-capitalize">Sale 70%</p>
                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                            <button type="button" class="btn offer-btn text-uppercase mt-4">Shop Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Offer Box 3 as Carousel Item -->
                        <div class="carousel-item">
                             <div class="offer-box">
                                 <div class="offer-inner">
                                     <div class="offer-image position-relative overflow-hidden">
                                         <img src="Asset/image/Chihuahua-sitting-outdoors-in-the-snow-in-a-pink-winter-coat.jpg"
                                              alt="offer" class="img-fluid">
                                         <div class="offer-overlay"></div>
                                     </div>
                                     <div class="offer-info">
                                         <div class="offer-info-inner">
                                             <p class="heading-bigger text-capitalize">Sale 25%</p>
                                             <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                             <button type="button" class="btn offer-btn text-uppercase mt-4">Shop Now</button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- Offer Box 4 as Carousel Item -->
                        <div class="carousel-item">
                             <div class="offer-box">
                                 <div class="offer-inner">
                                     <div class="offer-image position-relative overflow-hidden">
                                         <img src="Asset/image/258_de35f13639-rolf-smoothblue.jpg" alt="offer"
                                             class="img-fluid">
                                         <div class="offer-overlay"></div>
                                     </div>
                                     <div class="offer-info">
                                         <div class="offer-info-inner">
                                             <p class="heading-bigger text-capitalize">Sale 70%</p>
                                             <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                             <button type="button" class="btn offer-btn text-uppercase mt-4">Shop Now</button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    </div>
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
        <script src="Asset/js/script.js"></script>

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
                        ref: product.ref,
                        quantity: 1
                    });
                }

                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount();

                // Show confirmation message
                showAddToCartPopup(product.name);
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

            // Function to show add to cart popup
            function showAddToCartPopup(productName) {
                const popupModal = new bootstrap.Modal(document.getElementById('addToCartModal'));
                document.getElementById('addedProductName').textContent = productName;
                popupModal.show();
            }
        </script>

    <!-- Add to Cart Modal -->
    <div class="modal fade" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addToCartModalLabel">Product Added to Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><span id="addedProductName" class="fw-bold"></span> has been added to your cart.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue Shopping</button>
                    <a href="./Add-to-Cart.html" class="btn btn-primary">View Cart</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>