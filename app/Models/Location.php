<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Location extends Model
{
    use HasFactory;

        public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }

}
