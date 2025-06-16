<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Futsal;
use App\Models\Booking;
use App\Models\User;

class FrontendController extends Controller
{
    public function index()
    {
        return view('layouts.frontendCode.index');
    }

    public function about()
    {
        return view('layouts.frontendCode.about');
    }

    public function contact()
    {
        return view('layouts.frontendCode.Contact-us');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);

        // Here you can add code to send email or store in database
        // For now, we'll just redirect with a success message
        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }

    public function futsalDetails($id)
    {
        $futsal = Futsal::findOrFail($id);
        return view('layouts.frontendCode.futsal-details', compact('futsal'));
    }

    public function confirmBooking()
    {
        return view('layouts.frontendCode.confirm-booking');
    }

    public function bookingSuccess()
    {
        return view('layouts.frontendCode.booking-success');
    }

    public function cart()
    {
        return view('layouts.frontendCode.Add-to-Cart');
    }

    public function debugFutsalIds()
    {
        $futsalIds = \App\Models\Futsal::pluck('id');
        return "Futsal IDs in database: " . $futsalIds->implode(', ');
    }

    public function dashboard()
    {
        $data = [
            'totalFutsals' => Futsal::count(),
            'totalBookings' => Booking::count(),
            'totalUsers' => User::count(),
            'totalRevenue' => Booking::where('status', 'confirmed')->sum('total_amount'),
            'recentBookings' => Booking::with(['futsal', 'user'])
                ->latest()
                ->take(5)
                ->get(),
            'confirmedBookings' => Booking::where('status', 'confirmed')->count(),
            'pendingBookings' => Booking::where('status', 'pending')->count(),
            'cancelledBookings' => Booking::where('status', 'cancelled')->count(),
        ];

        return view('backend.dashboard', $data);
    }

    public function getTimeSlots(Request $request)
    {
        $request->validate([
            'futsal_id' => 'required|exists:futsals,id',
            'date' => 'required|date',
        ]);

        $futsalId = $request->futsal_id;
        $date = $request->date;

        // Define all possible time slots for a futsal
        $allTimeSlots = [];
        for ($i = 6; $i < 22; $i++) { // From 06:00 to 21:00
            $start = str_pad($i, 2, '0', STR_PAD_LEFT) . ':00';
            $end = str_pad($i + 1, 2, '0', STR_PAD_LEFT) . ':00';
            $allTimeSlots[] = [
                'time' => "{$i}-" . ($i + 1),
                'status' => 'available',
                'start_time' => $start,
                'end_time' => $end,
            ];
        }

        // Get booked time slots for the selected futsal and date
        $bookedSlots = Booking::where('futsal_id', $futsalId)
            ->where('booking_date', $date)
            ->whereIn('status', ['pending', 'confirmed'])
            ->get();

        // Mark booked slots as unavailable
        foreach ($allTimeSlots as &$slot) {
            foreach ($bookedSlots as $bookedSlot) {
                // Check for overlapping times
                $bookedStart = strtotime($bookedSlot->start_time);
                $bookedEnd = strtotime($bookedSlot->end_time);
                $slotStart = strtotime($slot['start_time']);
                $slotEnd = strtotime($slot['end_time']);

                if (($slotStart >= $bookedStart && $slotStart < $bookedEnd) ||
                    ($slotEnd > $bookedStart && $slotEnd <= $bookedEnd) ||
                    ($bookedStart >= $slotStart && $bookedStart < $slotEnd) ||
                    ($bookedEnd > $slotStart && $bookedEnd <= $slotEnd))
                {
                    $slot['status'] = 'booked';
                    break; // No need to check other booked slots for this time slot
                }
            }
        }

        return response()->json($allTimeSlots);
    }
} 