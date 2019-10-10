<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Book;
use Spatie\Searchable\Search;
use Illuminate\Support\Facades\Input;
class PagesController extends Controller
{
    //
    public function  home(){
     //   $books =DB::table('books')->get();//before eloquent
        $books =Book::all();
        return view('welcome')->with('books',$books);

    }
    public function booksAll() {//it should display all books created by seed
        $books = Book::all();
        return view('books.index')->with('books',$books);
    }

    public function show($id){
        $books =DB::table('books')->find($id);
        return view('books.show')->with('books',$books);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|max:255'
           ]);
        //dd($request)
        //I have to know what is coming in
        $searchResults = (new Search())
            ->registerModel(Book::class, 'title', 'author')

            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }
}
