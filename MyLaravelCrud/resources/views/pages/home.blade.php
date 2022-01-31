@extends('layouts.main-layout')
@section('content')
    
    <h2>Comics:</h2>

    <h5>
        <a href="{{ route('create') }}">ADD A COMIC</a>
    </h5>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('index', $comic -> id) }}">
                    {{ $comic -> title }} <br>
                </a>
                {{ $comic -> release_date }}

                <a href="{{ route('edit', $comic -> id) }}">
                    Edit Comic <br>
                </a>

                <a href="{{ route('delete', $comic -> id) }}">
                    Delete Comic <br>
                </a>
            </li>
        @endforeach
    </ul>
@endsection