<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futsal Details</title>
    <link rel="stylesheet" href="{{ asset('Asset/Css/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/bootstrap-5.3.6-dist/css/bootstrap-utilities.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('Asset/Css/style.css') }}">
</head>

<body>
    <!-- Navigation Bar -->
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
    <!-- Banner Section -->
    <section class="banner-section d-flex align-items-center" id="futsalBanner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="futsal-name"></h1>
                    <p class="location-text">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span id="futsalLocationText"></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Left Panel -->
                <div class="col-lg-8">
                    <!-- About Section -->
                    <div class="mb-5">
                        <h2 class="section-title">About This Futsal</h2>
                        <p id="futsalAboutText"></p>
                    </div>

                    <!-- Features & Amenities Section -->
                    <div class="mb-5">
                        <h2 class="section-title">Features & Amenities</h2>
                        <div class="amenities-grid" id="amenitiesGrid">
                            <!-- Amenities will be populated here by JavaScript -->
                        </div>
                    </div>
                </div>

                <!-- Right Panel - Booking -->
                <div class="col-lg-4">
                    <div class="booking-panel">
                        <h2 class="section-title">Book Your Slot</h2>
                        <p class="price-tag mb-4" id="futsalPrice"></p>

                        <!-- Date Picker -->
                        <div class="mb-4">
                            <label for="bookingDate" class="form-label">Select Date:</label>
                            <div class="date-picker">
                                <input type="date" class="form-control" id="bookingDate" value="{{ date('Y-m-d') }}">
                                <i class="bi bi-calendar"></i>
                            </div>
                        </div>

                        <!-- Time Slots -->
                        <div class="mb-4">
                            <label class="form-label">Select Time:</label>
                            <div class="time-slots" id="timeSlotsContainer">
                                <!-- Time slots will be populated by JavaScript -->
                            </div>
                            <small class="text-muted d-block mt-2"><i class="bi bi-info-circle me-1"></i> Select a time slot to continue</small>
                        </div>

                        <button class="btn btn-success w-100 py-3" id="bookNowBtn">Book Now</button>
                    </div>
                </div>
            </div>

            <!-- Pricing Details Section -->
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h2 class="section-title">Pricing Details</h2>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Price (NRs./hour)</th>
                                    </tr>
                                </thead>
                                <tbody id="pricingDetailsTableBody">
                                    <!-- Pricing details will be populated here by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h2 class="section-title">Contact Information</h2>
                        <div class="card p-3">
                            <p class="mb-2"><i class="bi bi-telephone-fill me-2 primary-green-icon"></i> Phone: <span id="contactPhone"></span></p>
                            <p class="mb-0"><i class="bi bi-geo-alt-fill me-2 primary-green-icon"></i> Location: <span id="contactLocation"></span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    
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
    <script src="{{ asset('Asset/js/futsal-data.js') }}"></script>
    <script>
        const ASSET_URL = '{{ asset('') }}';

        // Get futsal ID from URL path
        const pathSegments = window.location.pathname.split('/');
        const futsalId = parseInt(pathSegments[pathSegments.length - 1]);

        document.addEventListener('DOMContentLoaded', function() {
            console.log('Futsal ID from URL path:', pathSegments);
            console.log('Parsed Futsal ID:', futsalId);

            // Access futsals array from imported module
            const futsal = futsals.find(f => f.id === futsalId);
            console.log('Found futsal object:', futsal);

            if (!futsal) {
                console.log('Futsal not found, redirecting to home page.');
                window.location.href = '{{ route('home') }}';
                return;
            }

            // Update page title
            document.title = `${futsal.name} - Futsal Details`;

            // Update banner section with proper asset URL
            const bannerImage = futsal.image.startsWith('http') ? futsal.image : `${ASSET_URL}${futsal.image}`;
            document.getElementById('futsalBanner').style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('${bannerImage}')`;
            document.querySelector('.futsal-name').textContent = futsal.name;
            document.getElementById('futsalLocationText').textContent = futsal.contact.location;

            // Update About section
            document.getElementById('futsalAboutText').textContent = futsal.description;

            // Update Features & Amenities
            const amenitiesGrid = document.getElementById('amenitiesGrid');
            console.log('Amenities Grid Element:', amenitiesGrid);
            amenitiesGrid.innerHTML = ''; // Clear existing content
            futsal.amenities.forEach(amenity => {
                const amenityItem = document.createElement('div');
                amenityItem.classList.add('amenity-item');
                amenityItem.innerHTML = `
                    <i class="bi ${amenity.icon}"></i>
                    <span>${amenity.name}</span>
                `;
                amenitiesGrid.appendChild(amenityItem);
            });

            // Update price
            document.getElementById('futsalPrice').textContent = `NRs. ${futsal.price.toLocaleString()} /hour`;

            // Populate Pricing Details
            const pricingDetailsTableBody = document.getElementById('pricingDetailsTableBody');
            console.log('Pricing Details Table Body Element:', pricingDetailsTableBody);
            pricingDetailsTableBody.innerHTML = `
                <tr>
                    <td>Weekday (7AM - 3PM)</td>
                    <td>${futsal.pricing.weekday.toLocaleString()}</td>
                </tr>
                <tr>
                    <td>4PM - 7PM</td>
                    <td>${futsal.pricing['4PM-7PM'].toLocaleString()}</td>
                </tr>
                <tr>
                    <td>Public Holidays / Saturday</td>
                    <td>${futsal.pricing.public_holidays_saturday.toLocaleString()}</td>
                </tr>
            `;

            // Populate Contact Information
            document.getElementById('contactPhone').textContent = futsal.contact.phone;
            document.getElementById('contactLocation').textContent = futsal.contact.location;

            // Get current hour in Nepal (Asia/Kathmandu timezone)
            function getCurrentNepalHour() {
                const now = new Date();
                const formatter = new Intl.DateTimeFormat('en-US', {
                    hour: '2-digit',
                    hourCycle: 'h23',
                    timeZone: 'Asia/Kathmandu'
                });
                return parseInt(formatter.format(now));
            }

            const currentNepalHour = getCurrentNepalHour();
            const today = new Date().toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });
            const selectedDateInput = document.getElementById('bookingDate');
            console.log('Booking Date Input Element:', selectedDateInput);
            // This will be updated dynamically after fetching time slots
            let selectedDate = new Date(selectedDateInput.value).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });
            console.log('Selected Date (initial):', selectedDate);

            // Function to fetch and render time slots
            async function fetchAndRenderTimeSlots() {
                selectedDate = new Date(selectedDateInput.value).toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });
                console.log('Fetching time slots for date:', selectedDate);
                
                try {
                    const response = await fetch('{{ route("get.time.slots") }}?futsal_id={{ $futsal->id }}&date=' + selectedDateInput.value);
                    const timeSlotsData = await response.json();

                    const timeSlotsContainer = document.getElementById('timeSlotsContainer');
                    timeSlotsContainer.innerHTML = ''; // Clear existing slots
                    let anySlotSelectable = false;

                    timeSlotsData.forEach(slot => {
                        const timeSlotDiv = document.createElement('div');
                        let currentStatus = slot.status;
                        const slotStartHour = parseInt(slot.time.split('-')[0]);

                        // If it's today's date, disable past hours
                        if (selectedDate === today && slotStartHour <= currentNepalHour) {
                            currentStatus = "disabled";
                        }

                        timeSlotDiv.classList.add('time-slot', currentStatus);
                        timeSlotDiv.setAttribute('data-time', slot.time);
                        timeSlotDiv.textContent = `${slot.time.split('-')[0]}:00 - ${slot.time.split('-')[1]}:00`;

                        if (currentStatus === 'available') {
                            timeSlotDiv.addEventListener('click', function() {
                                document.querySelectorAll('.time-slot').forEach(s => s.classList.remove('selected'));
                                this.classList.add('selected');
                                document.getElementById('bookNowBtn').disabled = false;
                            });
                            anySlotSelectable = true; // Mark that at least one slot is selectable
                        } else {
                            timeSlotDiv.classList.add('disabled');
                        }
                        timeSlotsContainer.appendChild(timeSlotDiv);
                    });

                    // Initial state of Book Now button
                    document.getElementById('bookNowBtn').disabled = !document.querySelector('.time-slot.selected') && !anySlotSelectable;

                } catch (error) {
                    console.error('Error fetching time slots:', error);
                    alert('Could not load time slots. Please try again later.');
                }
            }

            // Add event listener for date change to re-fetch and render time slots
            selectedDateInput.addEventListener('change', fetchAndRenderTimeSlots);

            // Initial render of time slots on page load
            fetchAndRenderTimeSlots();

            // Book Now button functionality
            document.getElementById('bookNowBtn').addEventListener('click', function() {
                const date = document.getElementById('bookingDate').value;
                const selectedTimeSlot = document.querySelector('.time-slot.selected');

                if (!selectedTimeSlot) {
                    alert('Please select a time slot.');
                    return;
                }

                const time = selectedTimeSlot.getAttribute('data-time');
                const [startTime, endTime] = time.split('-');
                const courtType = futsal.amenities.length > 0 ? futsal.amenities[0].name : '5-a-side';

                // Create form data
                const formData = new FormData();
                formData.append('futsal_id', futsal.id);
                formData.append('booking_date', date);
                formData.append('start_time', `${startTime}:00`);
                formData.append('end_time', `${endTime}:00`);
                formData.append('notes', `Court Type: ${courtType}`);

                // Send booking request to backend
                fetch('{{ route("bookings.store") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        futsal_id: futsal.id,
                        booking_date: date,
                        start_time: `${startTime}:00`,
                        end_time: `${endTime}:00`,
                        notes: `Court Type: ${courtType}`
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = data.redirect;
                    } else {
                        alert(data.message || 'An error occurred while processing your booking.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while processing your booking. Please try again.');
                });
            });
        });
    </script>
</body>

</html> 