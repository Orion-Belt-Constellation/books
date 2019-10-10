
@extends('layout')


@section('content')

    <table class="table">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
        </tr>
        <tr>
                <td>{{$books->title}}</td>
                <td>{{$books->description}}</td>
                <td>{{$books->author}}</td>

            </tr>



    </table>
@endsection
