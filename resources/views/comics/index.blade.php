@extends('layouts._main')

@section('title')
    Comics List
@endsection

@section('main')
    <div>
        <a href="{{ route('comics.create') }}">ADD NEW COMIC</a>
    </div>
    <div class="container">
        <div class="list-container">
            @foreach ($comics as $comic)
                <div>
                    <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                        @csrf
                        @method('DELETE')
                        <input class="delete-btn" type="submit" value="Delete">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
