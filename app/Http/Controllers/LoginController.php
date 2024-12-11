<?php

namespace App\Http\Controllers;

use App\Models\VaultUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function dashboard()
    {
        $vaultUser = Auth::user();  // Retrieve the authenticated user using the Auth facade
        return view('dashboard', compact('vaultUser'));  // Pass it to the view
    }
    
    public function login(Request $request)
    {
        // Get credentials
        $credentials = $request->only('email', 'password');
    
        // Check if the user exists
        $user = VaultUser::where('email', $credentials['email'])->first();
    
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Password is correct, log the user in
            Auth::login($user);

            $token = Str::random(60);
            return redirect('/dashboard')->with('success', 'Login successful!')
                ->with('token', $token);
        }
    
        // Invalid credentials
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.'])->with('error', 'Invalid credentials');
    }
}
