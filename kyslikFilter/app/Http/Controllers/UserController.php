<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserFilters;

class UserController extends Controller
{
    public function index(UserFilters $filters)
    {
        return User::filter($filters)->get();
    }
}
