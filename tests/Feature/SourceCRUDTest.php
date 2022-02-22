<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SourceCRUDTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test storing of source through POST route.
     *
     * @return void
     */
    public function test_store_source_post_route()
    {
        // Create User
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        // Create Source
        $response = $this->actingAs($user)
            ->withHeaders([
                'X-Header' => 'Value',
            ])->post('/source', [
                'title' => 'Test',
                'reference_url' => 'https://www.google.com',
                'date' => '2022-02-22',
            ]);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertTrue(\App\Models\Source::count() > 0);
    }

    /**
     * Test updating of source through PUT route if you're unauthorized.
     *
     * @return void
     */
    public function test_update_source_put_route_unauthorized()
    {
        // Create User
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        // Create Source
        $response = $this->actingAs($user)
            ->withHeaders([
                'X-Header' => 'Value',
            ])->post("/source", [
                'title' => 'Example Title',
                'reference_url' => 'https://google.com',
                'date' => '2022-02-15',
            ]);

        $response->assertStatus(302);

        $user->sources;
        $source = $user->sources[0];

        // Create Another User (who is unauthorized to touch newly created source)
        $user2 = \App\Models\User::create([
            'email' => 'example2@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        // Attempt User 2 to update specific source he's unauthorized to update
        $response = $this->actingAs($user2)
            ->withHeaders([
                'X-Header' => 'Value',
            ])->put("/source/{$source->uuid}", [
                'title' => 'Test',
                'reference_url' => 'https://www.google.com',
                'date' => '2022-02-22',
            ]);

        $response->assertStatus(404);
        $this->assertTrue(\App\Models\Source::count() > 0);
    }

    /**
     * Test storing of source through POST route with an invalid URL
     * for `reference_url` field.
     *
     * @return void
     */
    // public function test_store_source_post_route_invalid_url()
    // {
        // $user = \App\Models\User::create([
        //     'email' => 'example@example.com',
        //     'password' => \Illuminate\Support\Facades\Hash::make('password'),
        // ]);

        // $response = $this->actingAs($user)
        //     ->withHeaders([
        //         'X-Header' => 'Value',
        //     ])->post('/source', [
        //         'title' => 'Test',
        //         'reference_url' => 'asdjhasjdbasdad',
        //         'date' => '2022-02-22',
        //     ]);

        // $response->assertStatus(302);
        // $response->assertSessionHasErrors();
        // $this->assertFalse(\App\Models\Source::count() > 0);
    // }
}
