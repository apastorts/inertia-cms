<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
	public function index()
	{
		return Inertia::render('Home');
	}

	public function home()
	{
		return Inertia::render('Dashboard');
	}

	public function login()
	{
		return Inertia::render('Login');
	}

	public function authenticate()
	{
		$credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return Inertia::render('Dashboard');
        }
	}	
}