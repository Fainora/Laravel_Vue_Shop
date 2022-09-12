<?php

namespace App\Http\Controllers;

use App\Actions\RegisterUserAction;
use App\Mail\NewAccountMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function __invoke(Request $request, RegisterUserAction $registerUserAction)
    {
        $data = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', Password::default()],
        ]);

        $user = $registerUserAction($data);
        //Mail::to($user())->send(new NewAccountMail());
        auth()->login($user);
        to_route('home');
    }
}
