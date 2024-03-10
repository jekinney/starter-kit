<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __invoke()
    {
        return inertia()
            ->modal('Auth/Login')
            ->baseRoute('home');
    }
}
