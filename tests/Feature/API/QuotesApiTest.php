<?php

namespace Tests\Feature\API;

use Tests\TestCase;

class QuotesApiTest extends TestCase
{
    public function test_the_api_works_with_token(): void
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . env('API_TOKEN')
        ])->get('/api/quotes');

        $response->assertStatus(200);
    }

    public function test_the_api_correctly_fails_without_token(): void
    {
        $response = $this->get('/api/quotes');

        $response->assertStatus(401);
    }
}
