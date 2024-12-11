<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordStoreController;
use App\Http\Controllers\RegisterController;
use App\Models\PasswordStore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('web')->group(function () {
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/dashboard', function () {
        $vaultUser = Auth::user();  // Retrieve the authenticated user
        $user = Auth::user();
    
        // Count the number of passwords stored for this user
        $passwordCount = PasswordStore::where('user_id', $user->id)->count(); // Count passwords for this vaultUser

    
        return view('dashboard', compact('passwordCount', 'vaultUser'));
    })->middleware('auth');
    Route::get('/store_password', function() {
        $vaultUser = Auth::user();
        $passwordStores = $vaultUser->passwordStores;  // Get the user's stored passwords
    
        return view('store_password', compact('vaultUser', 'passwordStores'));  // Pass both to the view
    })->middleware('auth')->name('storepassword');
    Route::post('/store_password', [PasswordStoreController::class, 'store'])->middleware('auth')->name('storepassword');
    Route::get('/store_document', function() {
        $vaultUser = Auth::user();
        return view('store_document', compact('vaultUser'));
    })->middleware('auth')->name('storedocument');

});

Route::get('/', function () {
    return redirect('/login');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');  // Redirect to login page after logout
})->name('logout');
Route::get('/login', function () {
    return view('login');
})->name('login');
// Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showForm']); // Show registration form
Route::post('/register', [RegisterController::class, 'register']); 

