<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Teacher extends Model implements Searchable
{
    public function getSearchResult(): SearchResult
    {
        $url = route('teachers.show', $this->id);

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