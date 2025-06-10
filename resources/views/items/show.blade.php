<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Item Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">{{ $item->name }}</h3>

                    <div class="mb-4">
                        <p class="text-sm text-gray-600"><strong>ID:</strong> {{ $item->id }}</p>
                        <p class="text-sm text-gray-600"><strong>Description:</strong> {{ $item->description }}</p>
                        <p class="text-sm text-gray-600"><strong>Created At:</strong> {{ $item->created_at->format('M d, Y H:i A') }}</p>
                        <p class="text-sm text-gray-600"><strong>Updated At:</strong> {{ $item->updated_at->format('M d, Y H:i A') }}</p>
                    </div>

                    <div class="flex items-center mt-6">
                        <a href="{{ route('items.edit', $item) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Edit Item') }}
                        </a>
                        <a href="{{ route('items.index') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('Back to Items') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 