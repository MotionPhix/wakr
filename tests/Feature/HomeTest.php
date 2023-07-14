<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_loads_a_home_page_with_content()
    {
        $response = $this->get('/');

        $response->assertSeeText('Laravel');

        $response->assertSeeText('Sponsor');

        // $response->assertUnauthorized('Sponsor');

        $response->assertStatus(200);
    }
}
