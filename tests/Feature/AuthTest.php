<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user registration with errors on email.
     *
     * @return void
     */
    public function test_register_user_error_email()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/register', [
            'email' => "memberexample.com",
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors();
        $this->assertFalse(\App\Models\User::count() > 0);
    }

    /**
     * Test user registration with errors on password (less than 8 char.).
     *
     * @return void
     */
    public function test_register_user_error_password()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/register', [
            'email' => "member@example.com",
            'password' => 'passw',
            'password_confirmation' => 'passw',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors();
        $this->assertFalse(\App\Models\User::count() > 0);
    }

    /**
     * Test user registration with errors on confirm password.
     *
     * @return void
     */
    public function test_register_user_error_confirm_password()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/register', [
            'email' => "member@example.com",
            'password' => 'password',
            'password_confirmation' => 'passwords',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors();
        $this->assertFalse(\App\Models\User::count() > 0);
    }

    /**
     * Test user registration without errors.
     *
     * @return void
     */
    public function test_register_user_success()
    {
        $this->assertGuest($guard = null);

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/register', [
            'email' => "member@example.com",
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertTrue(\App\Models\User::count() > 0);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $response->assertRedirect('/');
        $this->assertAuthenticated($guard = null);
    }

    /**
     * Test user login with non-existent email.
     */
    public function test_login_user_with_non_existent_email()
    {
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/login', [
            'email' => 'member@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors();
    }

    /**
     * Test user login with wrong password.
     */
    public function test_login_user_with_wrong_password()
    {
        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/login', [
            'email' => $user->email,
            'password' => 'wrongpassword',
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors();
    }

    /**
     * Test user login with no errors.
     */
    public function test_login_user_success()
    {
        $this->assertGuest($guard = null);

        $user = \App\Models\User::create([
            'email' => 'example@example.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/');
        $this->assertAuthenticated($guard = null);
    }
}
