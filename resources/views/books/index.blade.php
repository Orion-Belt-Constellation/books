
@extends('layout')


@section('content')

    <table class="table">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
        </tr>
        @foreach($books as $book)
        <tr><td><a href="/books/{{$book->id}}">{{$book->title}}</a></td>
                <td>{{$book->description}}</td>
                <td>{{$book->author}}</td>

            </tr>
        @endforeach


        </table>

@endsection
