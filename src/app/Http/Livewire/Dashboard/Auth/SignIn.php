<?php

namespace App\Http\Livewire\Dashboard\Auth;

use App\Services\AuthService;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class SignIn extends Component
{
    public $userName;
    public $password;

    public $rules = [
        'userName' => 'required|min:3',
        'password' => 'required|min:8',
    ];

    public function render()
    {
        return view('livewire.dashboard.auth.sign-in');
    }

    public function clearVariable()
    {
        $this->reset([
            'complaintDescription',
            'complainantName',
            'divisionId',
        ]);
        $this->resetValidation();
        $this->resetErrorBag();
    }

    public function signIn()
    {
        $this->validate();
        $authService = App::make(AuthService::class);
        if ($authService->dashboardSignIn([
            'username' => $this->userName,
            'password' => $this->password,
        ])) {
            session()->regenerate();
            return redirect()->route('dashboard');
        }
    }
}
