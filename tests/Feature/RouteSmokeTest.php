<?php

namespace Tests\Feature;

use Tests\TestCase;

class RouteSmokeTest extends TestCase
{
    public function test_example(): void
    {
        $response = $this->get('/kantin/stand-utama');

        $response->assertStatus(200);
    }
}
