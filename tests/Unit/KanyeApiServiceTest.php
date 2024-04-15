<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Services\KanyeApiService;

class KanyeApiServiceTest extends TestCase
{
    public function test_the_service_returns_5_results_by_default(): void
    {
        $api = new KanyeApiService;

        $response = $api->getQuotes();

        $this->assertCount(5, $response);
    }

    public function test_the_service_can_return_other_numbers_of_results(): void
    {
        $api = new KanyeApiService;

        $response = $api->getQuotes(10);

        $this->assertCount(10, $response);
    }

    public function test_the_service_handles_0_results_as_empty_array(): void
    {
        $api = new KanyeApiService;

        $response = $api->getQuotes(0);

        $this->assertCount(0, $response);
    }
}
