<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

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
        // if (!Hash::check($password, $hashedPassword)){
        //     $fail('Invalid Credentials');
        // }

        $attempt = Auth::attempt([
            'email'=>$value,
            'password' => request()->password
        ]);

        if (!$attempt)
        $fail('Invalid Credentials');
    }
}
