<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('Asset/Css/themify-icons/themify-icons.css') }}"> <!-- Themify icons-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}"> <!-- Bootstrap main CSS-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css') }}"> <!-- Bootstrap grid-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/style.css') }}"> <!-- Custom css-->
    <link rel="stylesheet" href="{{ asset('Asset/Css/responsive.css') }}">
    <style>
        html, body {
            height: 100%;
        }
        body {
            min-height: 100vh;  
            background: #f7f8fa;
        }
        .contact-outer-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: calc(100vh - 80px);
            margin-top: 80px;
            box-sizing: border-box;
        }
        .contact-inner-container {
            width: 100%;
            max-width: 1200px;
            margin: 40px 32px;
            display: flex;
            overflow: hidden;
            background: none;
            border-radius: 24px;
        }
        .hero-section {
            width: 30%;
            min-width: 260px;
            max-width: 400px;
            display: flex;
            align-items: stretch;
            justify-content: center;
            padding: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset("Asset/image/girl-white-dress-classic-clothing-5k-tx-1920x1080.jpg") }}');
            background-size: cover;
            background-position: center;
        }
        .hero-content {
            color: #fff;
            text-align: center;
            z-index: 2;
            width: 100%;
            background: rgba(0,0,0,0.22);
            border-radius: 0 0 0 0;
            padding: 32px 18px;
            box-shadow: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
        .hero-content h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 12px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .hero-content p {
            font-size: 1rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            line-height: 1.5;
        }
        .contact-section {
            width: 70%;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 80px 48px 60px 48px;
            background: none;
        }
        .contact-section-content {
            width: 100%;
            max-width: 540px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .contact-section-content h2 {
            color: #dc3545;
            font-size: 2.1rem;
            font-weight: 900;
            margin-bottom: 24px;
            text-align: left;
            letter-spacing: 1px;
            position: relative;
        }
        .contact-section-content h2:after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: #dc3545;
            margin: 12px 0 0 0;
            border-radius: 2px;
        }
        .contact-info {
            background: #f7f8fa;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
            padding: 20px 16px 8px 16px;
            margin-bottom: 24px;
        }
        .contact-info li {
            display: flex;
            align-items: center;
            margin-bottom: 14px;
        }
        .contact-info li:last-child {
            margin-bottom: 0;
            position: relative;
        }
        .contact-info .icon-wrapper {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        .contact-info .icon-wrapper i {
            font-size: 1.1rem;
            color: #dc3545;
        }
        .contact-info a {
            color: #222;
            font-size: 1rem;
            text-decoration: none;
        }
        .contact-info li:last-child:after {
            content: '';
            display: block;
            height: 3px;
            width: 100%;
            background: #dc3545;
            margin-top: 10px;
            border-radius: 2px;
        }
        .contact-form label {
            font-weight: 600;
            color: #dc3545;
            margin-bottom: 6px;
            display: block;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }
        .contact-form .form-control, .contact-form textarea {
            border: 1.5px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            margin-bottom: 16px;
            font-size: 1rem;
            background: #f9f9f9;
            transition: border 0.2s;
        }
        .contact-form .form-control:focus, .contact-form textarea:focus {
            border-color: #dc3545;
            box-shadow: 0 2px 12px rgba(220, 53, 69, 0.1);
        }
        .contact-form textarea {
            min-height: 120px;
            resize: vertical;
        }
        .contact-form button {
            background: #dc3545;
            border: none;
            padding: 12px 24px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: background 0.2s;
        }
        .contact-form button:hover {
            background: #c82333;
        }
        @media (max-width: 991px) {
            .contact-inner-container {
                flex-direction: column;
                margin: 20px;
            }
            .hero-section {
                width: 100%;
                max-width: none;
                min-height: 200px;
            }
            .contact-section {
                width: 100%;
                padding: 40px 20px;
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

    <div class="contact-outer-container">
        <div class="contact-inner-container">
            <div class="hero-section">
                <div class="hero-content">
                    <h1>Get in Touch</h1>
                    <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                </div>
            </div>
            <div class="contact-section">
                <div class="contact-section-content">
                    <h2>Contact Us</h2>
                    <ul class="contact-info">
                        <li>
                            <div class="icon-wrapper">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <a href="#">Pokhara, Nepal</a>
                        </li>
                        <li>
                            <div class="icon-wrapper">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <a href="tel:+1234567890">9846983690</a>
                        </li>
                        <li>
                            <div class="icon-wrapper">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <a href="mailto:info@futsal.com">info@futsal.com</a>
                        </li>
                    </ul>
                    <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Send Message</button>
                    </form>
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 