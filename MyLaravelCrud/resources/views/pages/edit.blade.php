@extends('layouts.main-layout')
@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('update', $comic -> id) }}" method="POST">

    @method("POST")
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" placeholder="title" value="{{ $comic -> title }}"><br>
    <label for="author">Author:</label>
    <input type="text" name="author" placeholder="author" value="{{ $comic -> author }}"><br>
    <label for="release_date">Release date:</label>
    <input type="date" name="release_date" value="{{ $comic -> release_date }}"><br>
    <label for="pages">Pages:</label>
    <input type="text" name="pages" value="{{ $comic -> pages }}"><br>
    <input type="submit" value="UPDATE">

    </form>

@endsection