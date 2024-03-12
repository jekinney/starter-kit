<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show()
    {
        return inertia()->render('Account/Show');
    }

    public function security()
    {
        return inertia()->render('Account/Security');
    }

    public function password()
    {
        return inertia()->render('Account/Password');
    }
}
