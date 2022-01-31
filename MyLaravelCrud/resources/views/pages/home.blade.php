@extends('layouts.main-layout')
@section('content')
    
    <h2>Comics:</h2>

    <h5>
        <a href="{{ route('create') }}">ADD A COMIC</a>
    </h5>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('index', $comic -> id)}}">
                    {{ $comic -> title }} <br>
                </a>
                {{ $comic -> release_date }}
            </li>
        @endforeach
    </ul>
@endsection