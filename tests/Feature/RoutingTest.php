<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function test_popup_loads_when_request_demo_clicked()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Request Demo');
    }
}
