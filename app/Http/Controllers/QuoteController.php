<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use App\Services\KanyeApiService;

class QuoteController extends Controller
{
    public function index() {
        $api = new KanyeApiService;
        $quotes = $api->getQuotes();
        
        return Inertia::render('Quotes', [
            'quotes' => $quotes
        ]);
    }
}
