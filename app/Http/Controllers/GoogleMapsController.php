<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GoogleMapsController extends Controller
{
    public function test()
    {
        $apiKey = config('services.google_maps.api_key');

        $response = Http::withHeaders([
            'X-Goog-Api-Key' => $apiKey,
            'X-Goog-FieldMask' => 'places.id,places.displayName,places.formattedAddress',
        ])->post('https://places.googleapis.com/v1/places:searchText', [
            'textQuery' => 'Jaipur Railway Station',
            'languageCode' => 'en',
        ]);

        return response()->json([
            'success' => $response->successful(),
            'status' => $response->status(),
            'data' => $response->json(),
        ]);
    }
    public function autocomplete(Request $request)
    {
        $request->validate([
            'input' => ['required', 'string', 'min:2', 'max:200'],
        ]);

        $apiKey = config('services.google_maps.api_key');

        $response = Http::withHeaders([
            'X-Goog-Api-Key' => $apiKey,
            'X-Goog-FieldMask' => 'suggestions.placePrediction.placeId,suggestions.placePrediction.text,suggestions.placePrediction.structuredFormat',
        ])->post('https://places.googleapis.com/v1/places:autocomplete', [
            'input' => $request->input('input'),
            'languageCode' => 'en',
        ]);

        return response()->json([
            'success' => $response->successful(),
            'status' => $response->status(),
            'data' => $response->json(),
        ]);
    }

    public function route(Request $request)
    {
        $request->validate([
            'pickup_place_id' => ['required', 'string'],
            'drop_place_id' => ['required', 'string'],
        ]);

        $apiKey = config('services.google_maps.api_key');

        $response = Http::withHeaders([
            'X-Goog-Api-Key' => $apiKey,
            'X-Goog-FieldMask' => 'routes.distanceMeters,routes.duration,routes.legs',
        ])->post(
            'https://routes.googleapis.com/directions/v2:computeRoutes',
            [
                'origin' => [
                    'placeId' => $request->pickup_place_id,
                ],

                'destination' => [
                    'placeId' => $request->drop_place_id,
                ],

                'travelMode' => 'DRIVE',

                'routingPreference' => 'TRAFFIC_AWARE',

                'computeAlternativeRoutes' => false,

                'languageCode' => 'en',

                'units' => 'METRIC',
            ]
        );

        return response()->json([
            'success' => $response->successful(),
            'status' => $response->status(),
            'data' => $response->json(),
        ]);
    }
}