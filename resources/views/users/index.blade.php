<!-- resources/views/users/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold text-gray-800">Users and Their Liked Dogs</h1>
    </x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($users as $user)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $user->name }}</h2>
                <p class="text-gray-600 mt-2">Liked Dogs:</p>
                <ul class="mt-2">
                    @foreach ($user->likedDogs as $dog)
                        <li class="flex items-center mt-2">
                            <span class="text-gray-800">{{ ucwords($dog->breed) }}</span>
                            <img class="w-12 h-12 ml-2 rounded-full object-cover" src="{{ $dog->image_url }}" alt="{{ $dog->breed }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</x-app-layout>
