<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function save(Request $request)
    {
        //validate requests

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
    }
}
