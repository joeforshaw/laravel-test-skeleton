<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesControllerTest extends TestCase
{
    public function testGood()
    {
        $response = $this->get('/good');
        $response->assertStatus(200);
    }

    public function testBad()
    {
        $response = $this->get('/bad');
        $response->assertStatus(200);
    }
}
