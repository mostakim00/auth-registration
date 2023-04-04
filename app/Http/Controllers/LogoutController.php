<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class LogoutController extends Controller
{
    public function perform()
    {
        Session::flush();
        Auth::logout();
        Retun redirect('login');
    }
}
