<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function getProfile()
    {
        return [
            'Age'=> 25,
            'Name'=>'JAY',
            'Address'=>'makati'
        ];
    }
}
