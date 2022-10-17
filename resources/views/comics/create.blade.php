@extends('layouts.app')

@section('content')
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title') }}" id="title" placeholder="Catwoman Vol. 1: Copycats">
    </div>
    <div><label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="thumb">Poster:</label>
        <input type="text" name="thumb" value="{{ old('thumb') }}" id="thumb" placeholder="https://picsum.photos/192/291">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ old('price') }}" id="price" placeholder="16.99">
    </div>
    <div>
        <label for="series">Series:</label>
        <input type="text" name="series" value="{{ old('series') }}" id="series" placeholder="Catwoman">
    </div>
    <div>
        <label for="sale-date">Sale date:</label>
        <input type="text" name="sale_date" value="{{ old('sale_date') }}" id="sale-date" placeholder="2019-04-10">
    </div>
    <div>
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ old('type') }}" id="type" placeholder="graphic novel">
    </div>
    <input type="submit" value="Save">
</form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection