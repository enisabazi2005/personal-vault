<?php

namespace App\Http\Controllers;

use App\Models\PasswordStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordStoreController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            // If not authenticated, return to login
            return redirect()->route('login');
        }
        // Process the request if authenticated
        $request->validate([
            'title' => 'nullable|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ],
        [
            'password.min' => 'Please ensure your password is at least 8 characters long.',
            'password.max' => 'Your password should not exceed 100 characters.',
        ]);
    
         PasswordStore::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'password' => $request->password,
        ]);

    
        return redirect()->back()->with('success', 'Password stored successfully');
    }    
    public function storePasswordView()
{
    $vaultUser = Auth::user(); // Get the authenticated user
    $passwordStores = $vaultUser->passwordStores; // Get the associated password stores for the user

    return view('store_password', compact('passwordStores')); // Pass the passwords to the view
}
}
