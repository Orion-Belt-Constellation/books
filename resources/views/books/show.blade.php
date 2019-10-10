
@extends('layout')


@section('content')
<div>
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
</div>
@endsection
