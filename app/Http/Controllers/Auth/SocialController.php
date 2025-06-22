<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Check if a user with this Google email exists
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            // Register a new user with Google info
            $user = $this->registerGoogleUser($googleUser);
        }

        // If user exists, log them in
        Auth::login($user);

        return redirect()->route('students.dashboard', [
            'hash' => Crypt::encryptString($user->id)
        ])->with('status', 'Logged in successfully with Google!');
    }


    public function registerGoogleUser($googleUser)
    {
        // Validate email presence (Socialite should always provide it)
        if (!$googleUser->getEmail()) {
            throw new \Exception('Google account has no email.');
        }

        // Check if user already exists (double check)
        if (User::where('email', $googleUser->getEmail())->exists()) {
            throw new \Exception('User already exists.');
        }

        // Get 'student' role ID
        $studentRoleId = Role::where('name', 'student')->value('id');

        if (!$studentRoleId) {
            throw new \Exception('Student role not found. Please seed the roles table.');
        }

        // Create new user
        $user = User::create([
            'name'     => $googleUser->getName(),
            'email'    => $googleUser->getEmail(),
            'password' => Hash::make(uniqid()), // required, even for social
            'email_verified_at' => now(),
            'role_id'  => $studentRoleId,
        ]);

        // Create linked profile
        Profile::create([
            'user_id' => $user->id,
        ]);

        return $user;
    }
}