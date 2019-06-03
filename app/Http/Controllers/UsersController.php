<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Reqquests;

class UsersController extends Controller
{
    public function create()
    {
    	return view('users.create');
    }
}
