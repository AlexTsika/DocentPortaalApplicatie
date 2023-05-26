<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Location;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

        return new SearchResult(
            $this,
            $this->lastname,
            $url
        );
    }

    public function scopeSearch($query, $term)
    {
        return $query->where('lastname', 'LIKE', '%' . $term . '%');
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'remarks',
        'phone',
        'address',
        'description',
        'website',
        'approved',
        'location_id',
        'category_id',
    ];
}
        return new SearchResult(
            $this,
            $this->lastname,
            $url
        );
    }

    public function scopeSearch($query, $term)
    {
        return $query->where('lastname', 'LIKE', '%' . $term . '%');
    }
}
        'codecity',
        'streetnr',
    ];
}
