
@extends('layout')


@section('content')


    <form action="{{route('search')}}" method="POST" >
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="query"
                   placeholder="Search books">
            <button type="submit" class="btn btn-primary">
Search
            </button>

        </div>

    </form>



@endsection('content')
@section('footer')

@endsection('footer')
