@extends('layouts._main')

{{-- @section('title')
    Comics List
@endsection --}}

@section('main')
    <div>
        <a href="{{ route('comics.create') }}">ADD NEW COMIC</a>
    </div>
    <div class="container">
        <div class="list-container">
            @foreach ($comics as $comic)
                <div>
                    <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                    <a href="{{ route('comics.confirm-delete', $comic->id) }}">Delete</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
