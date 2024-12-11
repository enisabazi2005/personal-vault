<?php

namespace App\Http\Controllers;

use App\Models\VaultUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:vault_users,email',
            'password' => 'required|string|min:8|confirmed', // Password confirmation is checked automatically if "password_confirmation" is sent
        ]);

        // Hash the password before saving
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create the user
        VaultUser::create($validatedData);

        // Redirect to login page after successful registration
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}
