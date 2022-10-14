@extends('layouts.app')

@section('content')
<img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
<h1>{{ $comic->title }}</h1>
<p>{{ $comic->description }}</p>
<div>{{ $comic->price }}</div>
<div>{{ $comic->series }}</div>
<div>{{ $comic->sale_date }}</div>
<div>{{ $comic->type }}</div>
@endsection