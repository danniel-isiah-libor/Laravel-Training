<?php

namespace App\Models;

use GuzzleHttp\Promise\AggregateException;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function getProfile(){
        return[
            'age' => 25,
            'address' => 'Tondo',
            'phone' => '123456'
        ];
    }
}
