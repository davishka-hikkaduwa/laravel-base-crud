@extends('layouts._main')

@section('main')
    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <label for="title">Title:</label>
            <input class="input" type="text" name="title" value="{{ $comic->title }}">
        </div>
        <div class="row">
            <label for="description">Description:</label>
            <textarea class="input" name="description" cols="30" rows="10" value="{{ $comic->description }}"></textarea>
        </div>
        <div class="row">
            <label for="thumb">Thumb:</label>
            <input class="input" type="text" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="row">
            <label for="price">Price:</label>
            <input class="input" type="text" name="price" value="{{ $comic->price }}">
        </div>
        <div class="row">
            <label for="series">Series:</label>
            <input class="input" type="text" name="series" value="{{ $comic->series }}">
        </div>
        <div class="row">
            <label for="sale_date">Sale date:</label>
            <input class="input" type="date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="row">
            <label for="type">Type:</label>
            <input class="input" type="text" name="type" value="{{ $comic->type }}">
        </div>

        <input type="submit" value="Update">
    </form>
@endsection
