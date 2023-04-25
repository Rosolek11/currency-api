<?php

namespace App\Http\Controllers;
use App\Models\CurrencyRate;
use Illuminate\Http\Request;



class CurrencyRateController extends Controller
{
   public function store(Request $request)
    {
        $request->validate([
            'currency' => 'required|string|max:3',
            'date' => 'required|date',
            'amount' => 'required|numeric',
        ]);

        $currencyRate = CurrencyRate::create($request->all());
        return response()->json($currencyRate, 201);
    }

    public function index(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $currencyRates = CurrencyRate::where('date', $request->date)->get();
        return response()->json($currencyRates);
    }

    public function show(Request $request, $currency)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $currencyRate = CurrencyRate::where('currency', $currency)
            ->where('date', $request->date)
            ->first();

        if (!$currencyRate) {
            return response()->json(['error' => 'Currency rate not found'],404);
        }
        return response()->json($currencyRate);
    }
}
