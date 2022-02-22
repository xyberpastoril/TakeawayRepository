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
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

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

    /**
     * Test updating of source through PUT route.
     * 
     * @return void 
     */
    public function test_update_source_put_route()
    {
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $user->sources()->create([
            'title' => 'Example Title',
            'reference_url' => 'https://google.com',
            'date' => '2022-02-15',
        ]);

        $this->assertTrue(\App\Models\Source::count() > 0);

        $response = $this->actingAs($user)
            ->withHeaders([
                'X-Header' => 'Value',
            ])->put("/source/{$user->sources[0]->uuid}", [
                'title' => 'Test 2',
                'reference_url' => 'https://www.facebook.com',
                'date' => '2022-02-14',
            ]);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertTrue(\App\Models\Source::count() > 0);

        $source = \App\Models\Source::where('uuid', '=', $user->sources[0]->uuid)->first();

        $this->assertTrue($source->title == "Test 2");
    }

    /**
     * Test deleting a source through DELETE route.
     * 
     * @return void
     */
    public function test_delete_source_delete_route()
    {
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $user->sources()->create([
            'title' => 'Example Title',
            'reference_url' => 'https://google.com',
            'date' => '2022-02-15',
        ]);

        $this->assertTrue(\App\Models\Source::count() > 0);

        $response = $this->actingAs($user)
            ->withHeaders([
                'X-Header' => 'Value',
            ])->delete("/source/{$user->sources[0]->uuid}");

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertFalse(\App\Models\Source::count() > 0);
        $this->assertFalse(\App\Models\Tag::count() > 0);
    }
}
