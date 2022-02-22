<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test whether the homepage is accessible.
     *
     * @return void
     */
    public function test_homepage_access()
    {
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $response = $this->actingAs($user)
            ->get('/');
        $response->assertStatus(200);
    }

    /**
     * Test whether the source page is accessible.
     *
     * @return void
     */
    public function test_source_page_access()
    {
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $response = $this->actingAs($user)
            ->get('/source');

        $response->assertStatus(200);
    }

    /**
     * Test whether the settings page is accessible.
     *
     * @return void
     */
    public function test_settings_page_access()
    {
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $response = $this->actingAs($user)
            ->get('/settings');
        $response->assertStatus(200);
    }
}
