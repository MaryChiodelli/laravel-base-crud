@extends('layouts.app')

@section('content')
<h1>Comics</h1>
<ul>
    @foreach($comics as $comic)
    <li>
        <h3>{{ $comic->title }}</h3>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </li>
    @endforeach
</ul>
@endsection