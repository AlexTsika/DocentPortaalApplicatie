<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = Str::of($value)->stripTags();
    }
}
