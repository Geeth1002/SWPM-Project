<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;


class AccountController extends Controller
{
    public function index()
    {
        return view('frontend.user.account');
    }
}
