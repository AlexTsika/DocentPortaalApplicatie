<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Teacher;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Location extends Model implements Searchable
{
    use HasFactory;

    public function getSearchResult(): SearchResult
    {
        $url = route('location.show', $this->id);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }
}