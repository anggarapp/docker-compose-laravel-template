<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function signIn()
    {
        return view('dashboard.auth.signin');
    }

    public function signOut()
    {
        $this->authService->dashboardSignOut();
        return redirect()->route('login');
    }
}
