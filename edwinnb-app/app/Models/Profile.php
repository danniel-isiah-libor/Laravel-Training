<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function getProfile()
    {
        return ['age'=>24,'address'=>'Makati', 'name'=>'edwin'];
    }
}

