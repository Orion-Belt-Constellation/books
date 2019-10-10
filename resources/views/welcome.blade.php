
@extends('layout')


@section('content')


    <form action="{{route('search')}}" method="POST">
        {{ csrf_field() }}
        <div class="input-group">
            <input id='only_input' type="text"  class="form-control" name="query"
                   placeholder="Search books" required>
            <input type="reset" class="btn btn" value="Reset">
            <button type="submit" class="btn btn-primary">Search
            </button>

        </div>

             <ul>
                 @foreach($errors->all()  as $error)
                     <li>{{$error}}</li>
                 @endforeach
             </ul>



    </form>



@endsection('content')
