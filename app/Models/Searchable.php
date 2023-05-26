<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class SearchableModel extends Model implements Searchable
{
    public function getSearchResult(): SearchResult
    {
        // Define the logic to generate search results for your model
    }
}