<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username', //Rule::unique('user', 'username');
            'email' => 'required|email|max:255|unique:users,email',
            'password' => ['required', 'max:255', 'min:6']
        ]);

        $user = User::create($attributes);

        //log the user in
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been crearted.');
    }
}
