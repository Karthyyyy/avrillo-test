<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class KanyeApiService 
{
    private string $apiUrl = 'api.kanye.rest';
    private string $apiResponse;
    private array $quotes = [];

    public function getQuotes($quotesToReturn = 5): array {
        try {
            // Connect to the api and add quote to our return x number of times
            for ($i = 1; $i <= $quotesToReturn; $i++) {
                $this->connectToApi()->addQuoteToResponse();
            }
        } catch (\Exception $error) {
            return [
                'error' => $error->getMessage()
            ];
        }

        return $this->quotes;
    }

    private function connectToApi(): KanyeApiService {
        $response = Http::withHeaders($this->getApiHeaders())
            ->get($this->apiUrl);

        $this->apiResponse = $response;

        if (!$response->successful()) {
            Log::error($response->json());
            throw new \Exception('There was an error getting API data');
        }

        return $this;
    }

    private function getApiHeaders(): array {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];
    }

    private function addQuoteToResponse(): void {
        $response = json_decode($this->apiResponse, true);
        $quote = $response["quote"];
        array_push($this->quotes, $quote);
    }
}