@extends('layouts.main-layout')
@section('content')
    
    <h2>Comics:</h2>

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