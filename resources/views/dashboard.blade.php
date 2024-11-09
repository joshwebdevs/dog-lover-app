<!-- resources/views/dashboard.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold text-gray-800">Available Dog Breeds</h1>
    </x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($dogs as $dog)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-4">
                <h2 class="text-xl font-semibold text-gray-800 capitalize">{{ $dog->breed }}</h2>
                <img class="w-full h-48 object-cover mt-2" src="{{ $dog->image_url }}" alt="{{ $dog->breed }}">

                <form action="{{ route('like.dog') }}" method="POST" class="mt-4">
                    @csrf
                    <input type="hidden" name="dog_id" value="{{ $dog->id }}">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                        Like
                    </button>
                </form>
            </div>
        @endforeach
    </div>

    <!-- Inline JavaScript to set maxLikes variable -->
    @if (session('max_likes'))
        <script>
            window.maxLikes = true;
        </script>
    @endif

    <!-- Include the external alert.js script -->
    <script src="{{ asset('js/alert.js') }}"></script>
</x-app-layout>
