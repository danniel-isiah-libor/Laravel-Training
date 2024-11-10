<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobExperience extends Model
{
    use HasFactory;

    /**
     * Relationship to Users
     */
    public function user()
    {
        return $this->belongsTo(User::class);
        // return $this->belongsToMany();
    }
}
