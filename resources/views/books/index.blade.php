
@extends('layout')


@section('content')

<div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr><td><a href="/books/{{$book->id}}">{{$book->title}}</a></td>
                <td>{{$book->description}}</td>
                <td>{{$book->author}}</td>

            </tr>
        </tbody>
        @endforeach


        </table>
</div>
@endsection('content')
