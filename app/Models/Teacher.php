<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Location;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Teacher extends Model implements Searchable
{
    public function getSearchResult(): SearchResult
    {
        $url = route('teachers.show', $this->id);

    public function location()
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
