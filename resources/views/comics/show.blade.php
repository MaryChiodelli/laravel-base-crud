@extends('layouts.app')

@section('content')
<div class="container header-wrapper">
    <a class="btn" href="{{ route('comics.edit', $comic) }}">Edit</a>
    
    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
        @csrf
        @method('DELETE')

        <input class="btn" type="submit" value="Delete">
    </form>
</div>

<div class="container">
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <div>{{ $comic->price }}</div>
    <div>{{ $comic->series }}</div>
    <div>{{ $comic->sale_date }}</div>
    <div>{{ $comic->type }}</div>
</div>
@endsection