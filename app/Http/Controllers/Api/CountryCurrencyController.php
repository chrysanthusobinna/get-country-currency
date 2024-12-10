<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CountryCurrency;
use App\Http\Controllers\Controller;

class CountryCurrencyController extends Controller
{
    public function getCountryCurrency($country)
    {
        $countryCurrency = CountryCurrency::where('country', $country)->first();

        if (!$countryCurrency) {
            return response()->json(['error' => 'Country not found'], 404);
        }

        return response()->json([
            'country' => $countryCurrency->country,
            'currency_name' => $countryCurrency->currency_name,
            'currency_code' => $countryCurrency->currency_code,
            'currency_symbol' => $countryCurrency->currency_symbol,
        ]);
    }
}
