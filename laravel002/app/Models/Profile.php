<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function getProfile()
    {
        return [
            'age' => 25,
            'address' => 'Dhaka, Bangladesh',
            'phone' => '01712345678'
        ];
    }
}