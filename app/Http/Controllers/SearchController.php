<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Searchable\Search;
use Spatie\Searchable\Searchable;



class SearchController extends Controller
{
    public function searchUsers(Request $request)
    {
        $query = $request->input('query');

        $searchResults = (new Search())
            ->registerModel(User::class, 'name')
            ->search($query);

        return view('search.users', compact('searchResults'));
    }

}