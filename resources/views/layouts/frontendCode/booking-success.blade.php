<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmed!</title>
    <link rel="stylesheet" href="{{ asset('Asset/Css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/style.css') }}">
    <style>
        :root {
            --primary-green: #2ecc71;
            --light-bg: #f8f9fa;
            --card-bg: #fff;
            --text-dark: #343a40;
        }

        body {
            background-color: var(--light-bg);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .success-card {
            background-color: var(--card-bg);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        .success-card .icon-circle {
            background-color: var(--primary-green);
            color: white;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
            margin: 0 auto 25px;
        }

        .success-card h1 {
            color: var(--primary-green);
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 2.2rem;
        }

        .success-card p {
            color: var(--text-dark);
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .btn-home {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
            font-weight: bold;
            padding: 12px 25px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-home:hover {
            background-color: #27ae60;
            border-color: #27ae60;
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
    <div class="success-card">
        <div class="icon-circle">
            <i class="bi bi-check-lg"></i>
        </div>
        <h1>Booking Confirmed!</h1>
        <p>Your booking for <span id="futsalName"></span> on <span id="bookingDate"></span> has been successfully confirmed.</p>
        <p class="text-muted">You will be redirected to the home page in <span id="countdown">5</span> seconds...</p>
        <a href="{{ route('home') }}" class="btn btn-primary btn-home">Go to Home</a>
    </div>

    <script src="{{ asset('Asset/Js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const futsalName = urlParams.get('futsalName') || 'the futsal';
            const bookingDate = urlParams.get('bookingDate') || 'your selected date';

            document.getElementById('futsalName').textContent = futsalName;
            document.getElementById('bookingDate').textContent = bookingDate;

            // Countdown and redirect
            let countdown = 5;
            const countdownElement = document.getElementById('countdown');
            
            const timer = setInterval(() => {
                countdown--;
                countdownElement.textContent = countdown;
                
                if (countdown <= 0) {
                    clearInterval(timer);
                    window.location.href = "{{ route('home') }}";
                }
            }, 1000);
        });
    </script>
</body>
</html> 