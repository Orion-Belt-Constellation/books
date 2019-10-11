
@extends('layout')


@section('content')
    <div class="card">
        <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

        <div class="card-body row">


                @foreach($searchResults as $searchResult)
                   <span class="col-8"><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></span>
                       <span class="col-4"><img  src="{{URL::asset('/images/index.png')}}" alt="profile Pic" height="100" width="100"  class=""> </span>


                @endforeach


        </div>
    </div>

@endsection
