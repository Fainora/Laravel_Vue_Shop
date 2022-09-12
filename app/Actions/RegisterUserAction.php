<?php
namespace App\Actions;

use App\Models\User;

class RegisterUserAction
{
    public function __invoke(array $data): User
    {
        return User::create([
            ...$data,
            'password' => bcrypt($data['password'])
        ]);
    }
}
