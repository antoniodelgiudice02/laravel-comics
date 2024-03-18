@extends('layout.app')

@section('main-content')
    <h1>Comics</h1>
    <ul>
        @foreach($comics as $comic)
            <li>{{$comic['series']}}</li>
        @endforeach
    </ul>
@endsection