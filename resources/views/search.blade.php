
@extends('layout')


@section('content')
    <div class="card">
        <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

        <div class="card-body">

            @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                <h2>{{ ucfirst($type) }}</h2>

                @foreach($modelSearchResults as $searchResult)
                   <div><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a>
                       <span></span></div>


                @endforeach
            @endforeach

        </div>
    </div>

@endsection
