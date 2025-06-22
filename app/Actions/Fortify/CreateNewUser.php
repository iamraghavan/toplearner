<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Role;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user with profile.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // Validate input
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        // Fetch 'student' role id
        $studentRoleId = Role::where('name', 'student')->value('id');

        if (!$studentRoleId) {
            throw new \Exception('Student role not found. Please seed the roles table.');
        }

        // Create user
        $user = User::create([
            'name'     => $input['name'],
            'email'    => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id'  => $studentRoleId,
        ]);

        // Create linked profile — user_id mapped automatically via $user->id
        Profile::create([
            'user_id' => $user->id,
            // user_unique_id will auto-generate via model event
        ]);

        return $user;
    }
}