@extends('layouts.app')

@section('content')

<section>
    <div class="container header-wrapper">
        <h1>Comics</h1>
        <a class="btn" href="{{ route('comics.create') }}">Add new comic</a>
    </div>

    <ul class="container comics-wrapper">
        @forelse($comics as $comic)
        <li class="card">
            <a class="card-content" href="{{ route('comics.show', $comic) }}">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h3>{{ $comic->title }}</h3>

                <div class="card-footer">
                    <a class="btn" href="{{ route('comics.edit', $comic) }}">Edit</a>
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn delete" type="submit" value="Delete">
                    </form>
                </div>
            </a>
        </li>
        @empty
        <div>No comic available</div>
        @endforelse
    </ul>
</section>

@endsection