<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @group welcome
 */
class WelcomeTest extends TestCase
{
    public function test_welcome_page_can_be_accessed(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
