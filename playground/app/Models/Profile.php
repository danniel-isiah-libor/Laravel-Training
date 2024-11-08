<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function getProfile(){
        return[
            'name' => 'Zyjeah Pretty',
            'age' => 25
        ];
    }
}
