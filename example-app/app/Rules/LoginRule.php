<?php

namespace App\Rules;

use App\Models\User;
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
        // dd(request()->password);

        // $user = User::whereEmail($value)->first();

        // $hashedPw = $user->password

        $attemp = Auth::attempt([
            'email' => $value,
            'password' => request()->password
        ]);

        if(!$attemp){
            $fail('Invalid credentials');
        }
    }
}
