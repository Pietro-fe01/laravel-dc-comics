@extends('layouts.scheme');

@section('page-title')
    Edit
@endsection

@section('main-content')
    <section class="container bg-light">
        <h1 class="mb-3">Edit Comic</h1>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf {{-- Token --}}

        @method('PUT') {{-- Metodo --}}

            <div class="mb-3">
                <label for="title" class="form-label">Title*</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="100" required value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Comic's thumb (URL) </label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price*</label>
                <input type="number" step=0.01 class="form-control" id="price" name="price" min="0" max="9999.99" required value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Comic Series*</label>
                <input type="text" class="form-control" id="series" name="series" maxlength="50" required value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date*</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Comic type*</label>
                <input type="text" class="form-control" id="type" name="type" maxlength="40" required value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ $comic->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">SALVA</button>
            <button type="reset" class="btn btn-secondary">RESET</button>
            <a href="{{ route('comics.index') }}">
                <button  type="button" class="btn btn-danger">ANNULLA CREAZIONE COMIC</button>
            </a>
        </form>
    </section>
@endsection