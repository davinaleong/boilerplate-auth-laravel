<?php

namespace Tests\Feature\Cms;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @group feature
 * @group base
 * @group cms
 * @group dashboard
 */
class DashboardTest extends TestCase
{
    public function test_guest_gets_redirected(): void
    {
        $response = $this->get('/cms/dashboard');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_user_can_access_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/cms/dashboard');

        $response->assertStatus(200);
    }
}
