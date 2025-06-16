@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">All Futsal Venues</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="futsalGrid">
        <!-- Futsal cards will be dynamically inserted here -->
    </div>
</div>

<script type="module">
    import { getAllFutsals } from '/Asset/js/futsal-data.js';

    function createFutsalCard(futsal) {
        return `
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="${futsal.image}" alt="${futsal.name}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">${futsal.name}</h3>
                    <p class="text-gray-600 mb-4">${futsal.description}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        ${futsal.amenities.map(amenity => `
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">
                                <i class="bi ${amenity.icon}"></i> ${amenity.name}
                            </span>
                        `).join('')}
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold">Rs. ${futsal.price}/hr</span>
                        <a href="/booking/${futsal.id}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
        `;
    }

    // Display all futsals
    const futsals = getAllFutsals();
    const futsalGrid = document.getElementById('futsalGrid');
    futsalGrid.innerHTML = futsals.map(futsal => createFutsalCard(futsal)).join('');
</script>
@endsection 