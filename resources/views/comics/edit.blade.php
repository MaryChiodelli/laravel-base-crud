@extends('layouts.app')

@section('content')
<form action="{{ route('comics.update', $comic) }}" method="POST">
    
    @csrf
    @method('PUT')
    
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ old('title', $comic->title) }}" id="title" placeholder="Catwoman Vol. 1: Copycats" class="@error('title') input-error @enderror">
    </div>

    @error('title')
        <div class="alert-error">{{ $message }}</div>
    @enderror
    
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10" class="@error('description') input-error @enderror">{{ old('description', $comic->description) }}</textarea>
    </div>

    @error('description')
        <div class="alert-error">{{ $message }}</div>
    @enderror
    
    <div>
        <label for="thumb">Poster:</label>
        <input type="text" name="thumb" value="{{ old('thumb', $comic->thumb) }}" id="thumb" placeholder="https://picsum.photos/192/291" class="@error('thumb') input-error @enderror">
    </div>

    @error('thumb')
        <div class="alert-error">{{ $message }}</div>
    @enderror
    
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ old('price', $comic->price) }}" id="price" placeholder="16.99" class="@error('price') input-error @enderror">
    </div>

    @error('price')
        <div class="alert-error">{{ $message }}</div>
    @enderror

    <div>
        <label for="series">Series:</label>
        <input type="text" name="series" value="{{ old('series', $comic->series) }}" id="series" placeholder="Catwoman" class="@error('series') input-error @enderror">
    </div>

    @error('series')
        <div class="alert-error">{{ $message }}</div>
    @enderror

    <div>
        <label for="sale-date">Sale date:</label>
        <input type="text" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" id="sale-date" placeholder="2019-04-10" class="@error('sale_date') input-error @enderror">
    </div>

    @error('sale_date')
        <div class="alert-error">{{ $message }}</div>
    @enderror

    <div>
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ old('type', $comic->type) }}" id="type" placeholder="graphic novel" class="@error('type') input-error @enderror">
    </div>

    @error('type')
        <div class="alert-error">{{ $message }}</div>
    @enderror

    <input type="submit" value="Save">
</form>

{{-- @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
@endsection