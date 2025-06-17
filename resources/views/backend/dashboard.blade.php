@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Start of Dashboard Content -->
        <div class="row">
            <!-- Total Counts/Statistics -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Futsals</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalFutsals }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-futbol fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Bookings</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalBookings }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalUsers }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Revenue</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rs.{{ number_format($totalRevenue, 2) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Bookings Table and Booking Status Chart -->
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Recent Bookings</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Futsal Name</th>
                                        <th>User Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentBookings as $booking)
                                        <tr>
                                            <td>#{{ $booking->id }}</td>
                                            <td>{{ $booking->futsal->name ?? 'N/A' }}</td>
                                            <td>{{ $booking->user->name ?? 'N/A' }}</td>
                                            <td>{{ $booking->booking_date->format('M d, Y') }}</td>
                                            <td>
                                                <select class="form-select status-select status-{{ $booking->status }}" data-booking-id="{{ $booking->id }}" onchange="updateStatus(this)">
                                                    <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                    <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                </select>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No recent bookings found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Booking Status</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="bookingStatusChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Confirmed
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-warning"></i> Pending
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-danger"></i> Cancelled
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Dashboard Content -->
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <style>
            .status-confirmed {
                background-color: green !important;
                color: white !important;
            }
            .status-pending {
                background-color: orange !important;
                color: white !important;
            }
            .status-cancelled {
                background-color: red !important;
                color: white !important;
            }
        </style>
        <script>
            function updateStatus(selectElement) {
                const bookingId = selectElement.dataset.bookingId;
                const newStatus = selectElement.value;

                // Remove existing status classes
                selectElement.classList.remove('status-confirmed', 'status-pending', 'status-cancelled');

                // Add the new status class
                selectElement.classList.add(`status-${newStatus}`);
                
                fetch(`/admin/bookings/${bookingId}/update-status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        status: newStatus
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        toastr.success('Status updated successfully');
                    } else {
                        toastr.error('Failed to update status');
                        // Revert to the previous status class if update fails
                        selectElement.classList.remove(`status-${newStatus}`);
                        selectElement.classList.add(`status-${data.previousStatus}`);
                        selectElement.value = data.previousStatus;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    toastr.error('An error occurred while updating status');
                    // Revert to the previous status class on error
                    // This assumes data.previousStatus is available on error too, or you might need another strategy
                    // For now, let's assume it's available.
                    // If not, you might want to fetch the current status from the backend or keep track of it client-side.
                });
            }

            document.addEventListener('DOMContentLoaded', function () {
                // Apply initial colors on page load
                document.querySelectorAll('.status-select').forEach(selectElement => {
                    const initialStatus = selectElement.value;
                    selectElement.classList.add(`status-${initialStatus}`);
                });

                var ctx = document.getElementById('bookingStatusChart');
                if (ctx) {
                    new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ['Confirmed', 'Pending', 'Cancelled'],
                            datasets: [{
                                data: [
                                    {{ $confirmedBookings }},
                                    {{ $pendingBookings }},
                                    {{ $cancelledBookings }}
                                ],
                                backgroundColor: ['#1cc88a', '#f6c23e', '#e74a3b'],
                                hoverBorderColor: 'rgba(234, 236, 244, 1)',
                            }],
                        },
                        options: {
                            maintainAspectRatio: false,
                            tooltips: {
                                backgroundColor: "rgb(255,255,255)",
                                bodyFontColor: "#858796",
                                borderColor: '#dddfeb',
                                borderWidth: 1,
                                xPadding: 15,
                                yPadding: 15,
                                displayColors: false,
                                caretPadding: 10,
                            },
                            legend: {
                                display: false
                            },
                            cutoutPercentage: 80,
                        },
                    });
                }
            });
        </script>
    @endpush
@endsection 