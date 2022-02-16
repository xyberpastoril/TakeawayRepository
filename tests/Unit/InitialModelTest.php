<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InitialModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Tests whether it is able to create a user.
     *
     * @return void
     */
    public function test_create_user()
    {
        $user = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $this->assertTrue(!is_null($user));
    }

    /**
     * Tests whether the User and Source Relationship works.
     * 
     * @return void
     */
    public function test_create_source()
    {
        $user = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $user->sources()->create([
            'id' => \Illuminate\Support\Str::uuid(),
            'title' => 'Example Title',
            'reference_url' => 'https://google.com',
            'date' => '2022-02-15',
        ]);

        $source_id = $user->sources[0]->id;

        $this->assertTrue($user->sources->count() == 1);
    }

    /**
     * Tests whether the Source and Takeaway Relationship works.
     * 
     * @return void
     */
    public function test_create_takeaway()
    {
        $user = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $user->sources()->create([
            'id' => \Illuminate\Support\Str::uuid(),
            'title' => 'Example Title',
            'reference_url' => 'https://google.com',
            'date' => '2022-02-15',
        ]);

        $user->sources[0]->takeaways()->create([
            'id' => \Illuminate\Support\Str::uuid(),
            'content' => 'This is an example takeaway.',
        ]);

        $this->assertTrue($user->sources[0]->takeaways->count() == 1);
    }

    /**
     * Tests whether the Source and Tag relationship works.
     * 
     * @return void
     */
    public function test_create_tags()
    {
        $user = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $user->sources()->create([
            'id' => \Illuminate\Support\Str::uuid(),
            'title' => 'Example Title',
            'reference_url' => 'https://google.com',
            'date' => '2022-02-15',
        ]);

        $this->assertTrue(!is_null($user->sources[0]->id));

        $user->sources[0]->tags()->create(['name' => 'test_a']);
        $user->sources[0]->tags()->create(['name' => 'test_b']);

        $this->assertTrue(\App\Models\Source::find($user->sources[0]->id)->tags()->count() == 2);
    }
}
