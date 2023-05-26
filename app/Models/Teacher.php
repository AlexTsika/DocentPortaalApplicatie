<?php

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\SearchableTrait;

class Teacher extends Model implements Searchable
{
    use SearchableTrait;

    // ...

    public function getSearchResult(): SearchResult
    {
        $url = route('teachers.show', $this->id);

        return new SearchResult(
            $this,
            $this->lastname,
            $url
        );
    }
}