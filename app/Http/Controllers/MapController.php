<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        // return view('roles');

        $states = State::all();

        foreach ($states as $state) {
            $localGovtCount = $state->localGovernmentsCount();
            echo$localGovtCount;
        }
    }

    public function getLgaData(Request $request)
    {
        // Your logic to fetch LGA data from the database or an API
        // Example: $lgas = Lga::all();

        $lgas = [
            ['name' => 'LGA 1', 'latitude' => 40.712776, 'longitude' => -74.005974],
            ['name' => 'LGA 2', 'latitude' => 51.5074, 'longitude' => -0.1278],
            // ...
        ];

        return response()->json($lgas);
    }
}
