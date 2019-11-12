<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	public function index()
	{
		return Inertia::render('Home');
	}

	public function home()
	{
		$user = Auth::user();
		return Inertia::render('Dashboard', compact('user'));
	}

	public function login()
	{
		return Inertia::render('Login');
	}

	public function authenticate(Request $request)
	{
		$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
        	$user = Auth::auth();
            return Inertia::render('Dashboard', compact('user'));
        }

        $error = "Username or Password is incorrect.";

        return Inertia::render('Login', compact('error'));
	}	
}