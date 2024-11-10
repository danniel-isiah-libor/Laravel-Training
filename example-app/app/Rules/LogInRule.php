<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LogInRule implements ValidationRule
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

        // Hash::check($password, $hashedPassword); result will be boolean

        // if(!Hash::check($password, $hashedPassword))
        // {
        //     $fail('Invalid Credentials!');
        // }

        $attempt = Auth::attempt([
            'email' => $value,
             'password' => request()->password
            ]);

        if(!$attempt)
        {
            $fail('Invalid Credentials!');
        }
    }
}
