<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Your Booking</title>
    <link rel="stylesheet" href="{{ asset('Asset/Css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/style.css') }}">
    <style>
        :root {
            --primary-green: #2ecc71;
            --dark-green: #27ae60;
            --light-bg: #f8f9fa;
            --card-bg: #fff;
            --text-dark: #343a40;
            --text-muted: #6c757d;
        }

        body {
            background-color: var(--light-bg);
            font-family: Arial, sans-serif;
        }

        .header-section {
            background-color: var(--primary-green);
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 30px;
        }

        .header-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .header-section p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .booking-summary-card {
            background-color: var(--card-bg);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .booking-summary-card h2 {
            color: var(--primary-green);
            font-weight: bold;
            margin-bottom: 25px;
        }

        .futsal-info {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .futsal-info img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 15px;
        }

        .futsal-details h3 {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--text-dark);
            margin-bottom: 5px;
        }

        .futsal-details p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        .booking-details-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .booking-details-row span:first-child {
            color: var(--text-dark);
            font-weight: 500;
        }

        .booking-details-row span:last-child {
            color: var(--text-muted);
        }

        .price-section {
            border-top: 1px solid #eee;
            padding-top: 20px;
            margin-top: 20px;
        }

        .price-section h3 {
            color: var(--primary-green);
            font-weight: bold;
            margin-bottom: 15px;
        }

        .total-price {
            font-size: 1.4rem;
            font-weight: bold;
            color: var(--primary-green);
        }

        .terms-checkbox {
            margin-top: 30px;
            margin-bottom: 25px;
            font-size: 0.9rem;
        }

        .terms-checkbox a {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
        }

        .terms-checkbox a:hover {
            text-decoration: underline;
        }

        .confirm-btn {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
            font-weight: bold;
            padding: 12px 20px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .confirm-btn:hover {
            background-color: var(--dark-green);
            border-color: var(--dark-green);
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
    <!-- Header Section -->
    <div class="header-section">
        <div class="container">
            <h1>Confirm Your Booking</h1>
            <p>Review and confirm your booking for <span id="futsalNameHeader"></span></p>
        </div>
    </div>

    <!-- Main Content - Booking Summary -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="booking-summary-card">
                    <h2>Booking Summary</h2>

                    <div class="futsal-info">
                        <img src="Asset/image/bfit.jpg" alt="Futsal Image" id="futsalThumbnailImage">
                        <div class="futsal-details">
                            <h3 id="futsalName">Bfit</h3>
                            <p><i class="bi bi-geo-alt-fill"></i> <span id="futsalLocation">Sankhamul, Kathmandu</span></p>
                        </div>
                    </div>

                    <div class="booking-details">
                        <div class="booking-details-row">
                            <span>Date:</span>
                            <span id="bookingDate">Tuesday 10 June 2025</span>
                        </div>
                        <div class="booking-details-row">
                            <span>Time:</span>
                            <span id="bookingTime">20-21</span>
                        </div>
                        <div class="booking-details-row">
                            <span>Duration:</span>
                            <span id="bookingDuration">1 hour</span>
                        </div>
                        <div class="booking-details-row">
                            <span>Court Type:</span>
                            <span id="bookingCourtType">5-a-side</span>
                        </div>
                    </div>

                    <div class="price-section">
                        <div class="booking-details-row">
                            <span>Price</span>
                            <span></span>
                        </div>
                        <div class="booking-details-row">
                            <span>Court Rental (1 hour)</span>
                            <span id="rentalPrice">Rs. 1,500</span>
                        </div>
                        <div class="booking-details-row mt-3">
                            <span>Total</span>
                            <span class="total-price" id="totalPrice">Rs. 1,500</span>
                        </div>
                    </div>

                    <div class="form-check terms-checkbox">
                        <input class="form-check-input" type="checkbox" id="termsCheckbox">
                        <label class="form-check-label" for="termsCheckbox">
                            I agree to the <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                        </label>
                    </div>

                    <button class="btn btn-primary w-100 confirm-btn" id="confirmBookingBtn" disabled>Confirm Booking</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);

            // Populate header
            const futsalNameHeader = urlParams.get('futsalName') || 'Buddhanagar Futsal';
            document.getElementById('futsalNameHeader').textContent = futsalNameHeader;

            // Populate futsal info
            document.getElementById('futsalName').textContent = futsalNameHeader;
            document.getElementById('futsalLocation').textContent = urlParams.get('location') || 'Sankhamul, Kathmandu';

            // Set futsal thumbnail image
            const futsalThumbnailImage = urlParams.get('futsalThumbnail');
            if (futsalThumbnailImage) {
                document.getElementById('futsalThumbnailImage').src = futsalThumbnailImage;
            }

            // Populate booking details
            document.getElementById('bookingDate').textContent = formatDate(urlParams.get('date'));
            document.getElementById('bookingTime').textContent = formatTime(urlParams.get('time'));
            document.getElementById('bookingDuration').textContent = urlParams.get('duration') || '1 hour';
            document.getElementById('bookingCourtType').textContent = urlParams.get('courtType') || '5-a-side';

            // Populate price details
            const price = parseFloat(urlParams.get('price')) || 1500;
            document.getElementById('rentalPrice').textContent = `Rs. ${price.toLocaleString()}`;
            document.getElementById('totalPrice').textContent = `Rs. ${price.toLocaleString()}`;

            // Enable/disable Confirm Booking button based on checkbox
            const termsCheckbox = document.getElementById('termsCheckbox');
            const confirmBookingBtn = document.getElementById('confirmBookingBtn');

            termsCheckbox.addEventListener('change', function() {
                confirmBookingBtn.disabled = !this.checked;
            });

            // Function to format date (e.g., 2025-06-10 to Tuesday 10 June 2025)
            function formatDate(dateString) {
                if (!dateString) return 'N/A';
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                return new Date(dateString).toLocaleDateString('en-US', options);
            }

            // Function to format time (e.g., 15-16 to 15:00-16:00)
            function formatTime(timeString) {
                if (!timeString) return 'N/A';
                const [start, end] = timeString.split('-');
                return `${start}:00-${end}:00`;
            }

            // Implement actual booking logic here
            confirmBookingBtn.addEventListener('click', function() {
                if (termsCheckbox.checked) {
                    const futsalName = document.getElementById('futsalName').textContent;
                    const bookingDate = document.getElementById('bookingDate').textContent;
                    
                    const successParams = new URLSearchParams({
                        futsalName: futsalName,
                        bookingDate: bookingDate
                    });
                    window.location.href = `booking-success.html?${successParams.toString()}`;
                }
            });
        });
    </script>
</body>
</html> 