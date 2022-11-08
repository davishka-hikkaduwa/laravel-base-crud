@extends('layouts._main')

@section('title')
    Comics List
@endsection

@section('main')
    {{-- @dump($comics) --}}

    @foreach ($comics as $comic)
        <div>
            <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
        </div>
    @endforeach
@endsection

</html>
