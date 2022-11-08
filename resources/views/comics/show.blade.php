@extends('layouts._main')

{{-- @section('title')
    {{ $comic->title }}
@endsection --}}

{{-- <title>Dettaglio {{ $comic->title }}</title> --}}


@section('main')
    <div class="container">
        <div class="card-container">
            <h1>{{ $comic->title }}</h1>
            <div class="image-container">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} cover">
            </div>
            <p>{{ $comic->description }}</p>
        </div>
    </div>
@endsection
