
@extends('layout')


@section('content')


    <form action="{{route('search')}}" method="POST">
        @csrf
        <div class="input-group">
            <input type="text"  class="form-control" name="query"
                   placeholder="Search books" required>

            <button type="submit" class="btn btn-primary">Search
            </button>

        </div>





    </form>
    <div>
        <ul>
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
        </ul>
    </div>



@endsection('content')
