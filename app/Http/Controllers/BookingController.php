<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Futsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::with(['futsal', 'user'])
            ->where('user_id', Auth::id())
            ->latest()
            ->paginate(10);
            
        return view('backend.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $futsals = Futsal::where('is_active', true)->get();
        return view('backend.bookings.create', compact('futsals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'futsal_id' => 'required|exists:futsals,id',
            'booking_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'notes' => 'nullable|string|max:500'
        ]);

        // Check if the time slot is available
        $existingBooking = Booking::where('futsal_id', $request->futsal_id)
            ->where('booking_date', $request->booking_date)
            ->where(function($query) use ($request) {
                $query->whereBetween('start_time', [$request->start_time, $request->end_time])
                    ->orWhereBetween('end_time', [$request->start_time, $request->end_time]);
            })
            ->first();

        if ($existingBooking) {
            return back()->with('error', 'This time slot is already booked. Please choose another time.');
        }

        // Get futsal price
        $futsal = Futsal::findOrFail($request->futsal_id);
        $hours = (strtotime($request->end_time) - strtotime($request->start_time)) / 3600;
        $totalAmount = $futsal->price * $hours;

        $booking = Booking::create([
            'user_id' => Auth::id(),
            'futsal_id' => $request->futsal_id,
            'booking_date' => $request->booking_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'total_amount' => $totalAmount,
            'status' => 'pending',
            'notes' => $request->notes
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Booking created successfully!',
            'redirect' => route('booking.success', ['booking_id' => $booking->id])
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('backend.bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        $futsals = Futsal::where('is_active', true)->get();
        return view('backend.bookings.edit', compact('booking', 'futsals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled',
            'notes' => 'nullable|string|max:500'
        ]);

        $booking->update($request->only(['status', 'notes']));

        return redirect()->route('bookings.index')
            ->with('success', 'Booking updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')
            ->with('success', 'Booking cancelled successfully!');
    }
}
