<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Futsal') }}
            </h2>
            <a href="{{ route('futsals.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('futsals.update', $futsal) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" 
                               id="name" type="text" name="name" value="{{ old('name', $futsal->name) }}" required>
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                            Description
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror" 
                                  id="description" name="description" rows="4" required>{{ old('description', $futsal->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                            Price per Hour (Rs.)
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-700">Rs.</span>
                            <input class="shadow appearance-none border rounded w-full py-2 pl-12 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') border-red-500 @enderror" 
                                   id="price" type="number" step="0.01" name="price" value="{{ old('price', $futsal->price) }}" required>
                        </div>
                        @error('price')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                            Main Image
                        </label>
                        @if($futsal->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $futsal->image) }}" alt="Current Image" class="h-32 w-32 object-cover rounded">
                            </div>
                        @endif
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror" 
                               id="image" type="file" name="image" accept="image/*">
                        <p class="text-gray-600 text-xs mt-1">Leave empty to keep current image</p>
                        @error('image')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="thumbnail">
                            Thumbnail Image
                        </label>
                        @if($futsal->thumbnail)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $futsal->thumbnail) }}" alt="Current Thumbnail" class="h-32 w-32 object-cover rounded">
                            </div>
                        @endif
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('thumbnail') border-red-500 @enderror" 
                               id="thumbnail" type="file" name="thumbnail" accept="image/*">
                        <p class="text-gray-600 text-xs mt-1">Leave empty to keep current thumbnail</p>
                        @error('thumbnail')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Amenities
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach(json_decode($futsal->amenities, true) as $index => $amenity)
                                <div>
                                    <input type="text" name="amenities[{{ $index }}][name]" placeholder="Amenity Name" 
                                           value="{{ $amenity['name'] }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-2">
                                    <input type="text" name="amenities[{{ $index }}][icon]" placeholder="Icon Class (e.g., bi-wifi)" 
                                           value="{{ $amenity['icon'] }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                </div>
                            @endforeach
                        </div>
                        @error('amenities')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Pricing
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @php
                                $pricing = json_decode($futsal->pricing, true);
                            @endphp
                            <div>
                                <input type="number" name="pricing[weekday]" placeholder="Weekday Price" 
                                       value="{{ $pricing['weekday'] ?? '' }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-2">
                                <input type="number" name="pricing[4PM-7PM]" placeholder="4PM-7PM Price" 
                                       value="{{ $pricing['4PM-7PM'] ?? '' }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div>
                                <input type="number" name="pricing[public_holidays_saturday]" placeholder="Public Holidays/Saturday Price" 
                                       value="{{ $pricing['public_holidays_saturday'] ?? '' }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        @error('pricing')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Contact Information
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @php
                                $contact = json_decode($futsal->contact, true);
                            @endphp
                            <div>
                                <input type="text" name="contact[phone]" placeholder="Phone Number" 
                                       value="{{ $contact['phone'] ?? '' }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-2">
                            </div>
                            <div>
                                <input type="text" name="contact[location]" placeholder="Location" 
                                       value="{{ $contact['location'] ?? '' }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        @error('contact')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Status
                        </label>
                        <div class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" class="mr-2" {{ $futsal->is_active ? 'checked' : '' }}>
                            <span class="text-gray-700">Active</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update Futsal
                        </button>
                        <a href="{{ route('futsals.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> 