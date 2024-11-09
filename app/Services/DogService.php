<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class DogService
{
    public function getBreeds()
    {
        $response = Http::get('https://dog.ceo/api/breeds/list/all');
        return $response->json('message'); // Returns the breed list
    }

    public function getRandomImage($breed)
    {
        $response = Http::get("https://dog.ceo/api/breed/$breed/images/random");
        return $response->json('message'); // Returns a random image URL
    }
}
