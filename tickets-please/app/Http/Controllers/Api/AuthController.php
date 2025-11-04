<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\LoginUserRequest;
use App\Models\User;
use App\Permissions\V1\Abilities;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponses;

    public function register()
    {
        return $this->ok('register');
    }

    public function login(LoginUserRequest $request)
    {
        $request->validated($request->all());

        if (! Auth::attempt($request->only('email', 'password'))) {
            return $this->error('Invalid credentials', 401);
        }

        $user = User::firstWhere('email', $request->email);
        $token = $user->createToken(
            'API token for '.$user->email,
            Abilities::getAbilities($user),
            now()->addMonth()
        )->plainTextToken;

        return $this->ok('Authenticated', ['token' => $token]);
    }

    public function logout(Request $request)
    {
        // dd($request->user()->currentAccessToken());

        /** @var \Laravel\Sanctum\PersonalAccessToken|null $token */
        $token = $request->user()->currentAccessToken();
        $token?->delete();

        return $this->ok('Logged out successfully');
    }
}
