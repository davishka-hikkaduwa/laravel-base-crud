@extends('layouts._main')

@section('title')
    New Comic
@endsection

@section('main')
    <div class="container">
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            <div class="row">
                <label for="title">Title:</label>
                <input class="input" type="text" name="title">
            </div>
            <div class="row">
                <label for="description">Description:</label>
                <textarea class="input" name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="row">
                <label for="thumb">Thumb:</label>
                <input class="input" type="text" name="thumb">
            </div>
            <div class="row">
                <label for="price">Price:</label>
                <input class="input" type="text" name="price">
            </div>
            <div class="row">
                <label for="series">Series:</label>
                <input class="input" type="text" name="series">
            </div>
            <div class="row">
                <label for="sale_date">Sale date:</label>
                <input class="input" type="date" name="sale_date">
            </div>
            <div class="row">
                <label for="type">Type:</label>
                <input class="input" type="text" name="type">
            </div>
            <div class="row">
                <input class="input" type="submit" value="Send">
            </div>
        </form>
    </div>
@endsection
