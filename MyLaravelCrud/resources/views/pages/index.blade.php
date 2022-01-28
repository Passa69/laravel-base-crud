@extends('layouts.main-layout')
@section('content')
    
    <h2>Comic:</h2>

    <h4>{{ $comic -> title }}</h4>
    <span>{{ $comic -> author }}</span><br>
    <span>Release: {{ $comic -> release_date }} - {{ $comic -> pages }}</span>
    <hr>
@endsection