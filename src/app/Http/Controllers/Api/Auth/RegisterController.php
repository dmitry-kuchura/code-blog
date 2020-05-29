<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $registerRequest)
    {
        User::create([
            'email' => $registerRequest->email,
            'name' => $registerRequest->name,
            'password' => bcrypt($registerRequest->password),
        ]);

        $token = auth()->attempt($registerRequest->only(['email', 'password']));

        if (!$token) {
            return abort(401);
        }

        return (new UserResource($registerRequest->user()))->additional([
            'meta' => ['token' => $token]
        ]);
    }
}
