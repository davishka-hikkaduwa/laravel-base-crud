@extends('layouts._main')

@section('title')
    New Comic
@endsection

@section('main')
    <form method="POST" action="{{ route('comics.store') }}">
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="thumb">Thumb:</label>
            <input type="text" name="thumb">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="series">Series:</label>
            <input type="text" name="series">
        </div>
        <div>
            <label for="sale_date">Sale date:</label>
            <input type="text" name="sale_date">
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" name="type">
        </div>

    </form>
@endsection
