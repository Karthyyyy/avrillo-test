<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\KanyeApiService;

class QuoteController extends Controller
{
    public function index() {
        $api = new KanyeApiService;
        $response = $api->getQuotes();

        return $response;
    }
}
