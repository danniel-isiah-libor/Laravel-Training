<?php

namespace App\Rules;

use Closure;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\ValidationRule;

class LoginRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // $user = User::whereEmail($value)->first();
        // $hashedPassword = $user->password;
        // $password = request()->password;

        // if(!Hash::check($password,$hashedPassword))
        $attempt = Auth::attempt(
            ['email' => $value,
            'password' => request()->password]
        );
        if(!$attempt)
            $fail("Invalid Credentials");
    }
}
