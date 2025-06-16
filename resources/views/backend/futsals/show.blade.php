@extends('backend.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Futsal Details</h1>
        <div>
            <a href="{{ route('futsals.edit', $futsal) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                Edit
            </a>
            <a href="{{ route('futsals.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>
        </div>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Images -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Images</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-medium mb-2">Main Image</h3>
                            <img src="{{ asset('storage/' . $futsal->image) }}" alt="{{ $futsal->name }}" class="w-full h-64 object-cover rounded">
                        </div>
                        <div>
                            <h3 class="text-lg font-medium mb-2">Thumbnail</h3>
                            <img src="{{ asset('storage/' . $futsal->thumbnail) }}" alt="{{ $futsal->name }}" class="w-32 h-32 object-cover rounded">
                        </div>
                    </div>
                </div>

                <!-- Details -->
                <div>
                    <h2 class="text-xl font-semibold mb-4">Details</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-medium mb-2">Basic Information</h3>
                            <p><strong>Name:</strong> {{ $futsal->name }}</p>
                            <p><strong>Description:</strong> {{ $futsal->description }}</p>
                            <p><strong>Base Price:</strong> Rs. {{ number_format($futsal->price, 2) }}/hr</p>
                            <p><strong>Status:</strong> 
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $futsal->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $futsal->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium mb-2">Amenities</h3>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach(json_decode($futsal->amenities, true) as $amenity)
                                    <div class="flex items-center">
                                        <i class="{{ $amenity['icon'] }} mr-2"></i>
                                        <span>{{ $amenity['name'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium mb-2">Pricing</h3>
                            @php
                                $pricing = json_decode($futsal->pricing, true);
                            @endphp
                            <p><strong>Weekday:</strong> Rs. {{ number_format($pricing['weekday'] ?? 0, 2) }}/hr</p>
                            <p><strong>4PM-7PM:</strong> Rs. {{ number_format($pricing['4PM-7PM'] ?? 0, 2) }}/hr</p>
                            <p><strong>Public Holidays/Saturday:</strong> Rs. {{ number_format($pricing['public_holidays_saturday'] ?? 0, 2) }}/hr</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-medium mb-2">Contact Information</h3>
                            @php
                                $contact = json_decode($futsal->contact, true);
                            @endphp
                            <p><strong>Phone:</strong> {{ $contact['phone'] ?? 'N/A' }}</p>
                            <p><strong>Location:</strong> {{ $contact['location'] ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 