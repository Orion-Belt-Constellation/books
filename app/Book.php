<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\SearchResult;

class Book extends Model  implements \Spatie\Searchable\Searchable
{
    //

    protected $fillable = ['title'];



    public function getSearchResult(): SearchResult
    {
        $url = route('books.show', $this->id);

        return new SearchResult(
            $this,
            $this->title,
            $url
        );
    }
}
