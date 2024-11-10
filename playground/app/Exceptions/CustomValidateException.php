<?php

namespace App\Exceptions;

use Exception;

class CustomValidateException extends Exception
{
    public function handle()
    {
        return view('welcome');
    }
}
