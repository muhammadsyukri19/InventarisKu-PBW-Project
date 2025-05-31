<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        
        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Get Staff TU role and assign it
        $staffRole = Role::where('name', 'Staff TU (Tata Usaha)')->first();
        $user->assignRole($staffRole);

        return redirect()->route('login')
            ->with('success', 'Registrasi berhasil! Silakan login dengan akun yang telah dibuat.');
    }
} 