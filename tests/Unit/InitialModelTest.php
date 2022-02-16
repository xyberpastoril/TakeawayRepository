<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InitialModelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Creates and Deletes User.
     *
     * @return void
     */
    public function test_create_and_delete_user()
    {
        $user = \App\Models\User::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $this->assertTrue(!is_null($user));

        $user->delete();

        $user2 = \App\Models\User::find($user->id);

        $this->assertTrue(is_null($user2));
    }

    public function test_create_and_delete_source()
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

        $user->sources()->delete();
        $user->delete();

        $this->assertFalse(!is_null(\App\Models\Source::find($source_id)));
    }

    public function test_create_and_delete_takeaway()
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

        $takeaway_id = $user->sources[0]->takeaways[0]->id;

        $user->sources[0]->takeaways()->delete();
        $user->sources()->delete();
        $user->delete();

        $this->assertFalse(!is_null(\App\Models\Source::find($takeaway_id)));
    }

    public function test_create_and_delete_tags()
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

        /**
         * At this point, source_id has to be explicitly mentioned and I wonder why.
         */
        $user->sources[0]->tags()->create([
            'name' => 'test_a',
        ]);

        $user->sources[0]->tags()->create([
            'name' => 'test_b',
        ]);

        // \App\Models\Tag::create([
        //     'source_id' => $user->sources[0]->id,
        //     'name' => 'test_a',
        // ]);

        // \App\Models\Tag::create([
        //     'source_id' => $user->sources[0]->id,
        //     'name' => 'test_b',
        // ]);

        $source = \App\Models\Source::find($user->sources[0]->id);
        $tags = $source->tags();

        $this->assertTrue($tags->count() == 2);

        $tags->delete();
        $this->assertFalse($tags->count() == 2);

        $source->delete();
        $user->delete();
    }
}
