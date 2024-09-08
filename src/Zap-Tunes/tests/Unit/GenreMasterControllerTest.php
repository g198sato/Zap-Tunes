<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\GenreMasterController;

class GenreMasterControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     * @test
     * @return void
     */
    public function testResponse()
    {
        $response = $this->getJson('/get_all_genre_masters');
        $response->assertStatus(200);
    }
}
