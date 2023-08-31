<?php

namespace App\Services\Impl;

use App\Repositories\AuthRepository;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthServiceImpl implements AuthService
{
    public function dashboardSignIn(array $credentials)
    {
        return Auth::attempt($credentials);
    }

    public function dashboardSignOut()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
    }
}
