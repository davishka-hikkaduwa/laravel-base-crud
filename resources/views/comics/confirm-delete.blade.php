@extends('layouts._main')

{{-- @section('title')
    Delete Confirmation
@endsection --}}

@section('main')
    <h1>Are you sure you want to delete this Comic?</h1>
    <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
        @csrf
        @method('DELETE')
        <input class="delete-btn" type="submit" value="Yes">
    </form>
    <a href="{{ route('comics.index') }}">No</a>
@endsection
