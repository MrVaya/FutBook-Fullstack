<?php

namespace App\Http\Controllers;

use App\Models\Futsal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FutsalController extends Controller
{
    public function index()
    {
        $futsals = Futsal::latest()->paginate(10);
        return view('backend.futsals.index', compact('futsals'));
    }

    public function create()
    {
        return view('backend.futsals.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'amenities' => 'required|array',
            'pricing' => 'required|array',
            'contact' => 'required|array',
            'is_active' => 'boolean'
        ]);

        // Handle image uploads
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('futsals', 'public');
        }
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('futsals/thumbnails', 'public');
        }

        // Convert arrays to JSON
        $validated['amenities'] = json_encode($validated['amenities']);
        $validated['pricing'] = json_encode($validated['pricing']);
        $validated['contact'] = json_encode($validated['contact']);

        Futsal::create($validated);

        return redirect()->route('futsals.index')
            ->with('success', 'Futsal created successfully.');
    }

    public function show(Futsal $futsal)
    {
        return view('backend.futsals.show', compact('futsal'));
    }

    public function edit(Futsal $futsal)
    {
        return view('backend.futsals.edit', compact('futsal'));
    }

    public function update(Request $request, Futsal $futsal)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'amenities' => 'required|array',
            'pricing' => 'required|array',
            'contact' => 'required|array',
            'is_active' => 'boolean'
        ]);

        // Handle image uploads
        if ($request->hasFile('image')) {
            // Delete old image
            if ($futsal->image) {
                Storage::disk('public')->delete($futsal->image);
            }
            $validated['image'] = $request->file('image')->store('futsals', 'public');
        }
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail
            if ($futsal->thumbnail) {
                Storage::disk('public')->delete($futsal->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('futsals/thumbnails', 'public');
        }

        // Convert arrays to JSON
        $validated['amenities'] = json_encode($validated['amenities']);
        $validated['pricing'] = json_encode($validated['pricing']);
        $validated['contact'] = json_encode($validated['contact']);

        $futsal->update($validated);

        return redirect()->route('futsals.index')
            ->with('success', 'Futsal updated successfully.');
    }

    public function destroy(Futsal $futsal)
    {
        // Delete images
        if ($futsal->image) {
            Storage::disk('public')->delete($futsal->image);
        }
        if ($futsal->thumbnail) {
            Storage::disk('public')->delete($futsal->thumbnail);
        }

        $futsal->delete();

        return redirect()->route('futsals.index')
            ->with('success', 'Futsal deleted successfully.');
    }
} 