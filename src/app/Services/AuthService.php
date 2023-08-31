<?php

namespace App\Services;

interface AuthService
{
    public function dashboardSignIn(array $credentials);
    public function dashboardSignOut();
}
