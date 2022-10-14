@extends('layouts.app')

@section('content')
<h1>Comics</h1>
<ul>
    @foreach($comics as $comic)
    <li>
        <a href="{{ route('comics.show', $comic->id) }}">
            <h3>{{ $comic->title }}</h3>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </a>
    </li>
    @endforeach
</ul>
@endsection