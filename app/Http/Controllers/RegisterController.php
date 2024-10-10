<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register', [
            'heading' => 'Rejestracja'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => ['required', 'min:2', 'max:255', 'string'],
            'last_name' => ['required', 'min:2', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8), 'confirmed']
        ]);

        $newUser = User::create($validatedData);

        Auth::login($newUser);

        return redirect('/');
    }
}
