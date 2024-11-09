<?php

namespace App\Http\Controllers;

use App\Services\DogService; // Import DogService
use App\Models\Dog; // Import Dog model
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Import the Controller class

class DogController extends Controller
{
    public function index(DogService $dogService)
    {
        set_time_limit(300);
    
        // Fetch breeds and images
        $breeds = $dogService->getBreeds();
        $dogs = [];
    
        foreach ($breeds as $breed => $subBreeds) {
            // Create or get dog breed with image from the database
            $dog = Dog::firstOrCreate(
                ['breed' => $breed],
                ['image_url' => $dogService->getRandomImage($breed)]
            );
    
            // Add the dog object to the array
            $dogs[] = $dog;
        }
    
        // Pass the dogs to the view
        return view('dashboard', compact('dogs'));
    }
    

public function like(Request $request)
{
    $user = auth()->user();
    
    // Check if the user has already reached the maximum likes
    if ($user->likedDogs()->count() >= 3) {
        // Set session variable for alert
        return back()->with('max_likes', true);
    }

    // Proceed with liking if under the limit
    $request->validate(['dog_id' => 'required|exists:dogs,id']);
    $user->likedDogs()->attach($request->dog_id);

    return back();
}

}
