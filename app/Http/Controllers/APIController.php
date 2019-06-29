<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;

class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getCountries()
    {
        $data = Country::get();

        return response()->json($data);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function getStates(Request $request)
    {
        $data = State::where('country_id', $request->country_id)->get();

        return response()->json($data);
    }
}
