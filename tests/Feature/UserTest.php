<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_from()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Dary',
            'email' => 'dary@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }

    public function test_it_stores_new_users()
    {
        $response = $this->post('/register', [
            'name' => 'Dary',
            'email' => 'dary@gmail.com',
            'password' => 'dary1234',
            'password_confirmation' => 'dary1234'
        ]);

        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_database()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'Dary'
        ]);

        $this->assertDatabaseMissing('users', [
            'name' => 'John'
        ]);
    }

    public function test_if_seeders_works()
    {
        $this->seed('UsersTableSeeder');
        //php artisan db:seed
    }
}
