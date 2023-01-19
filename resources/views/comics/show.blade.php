@extends('layouts.scheme');

@section('page-title')
    Show
@endsection

@section('main-content')
    <section class="container">
        <h1>{{ $comic->title }}</h1>
        <div>
            <img src="{{ $comic->thumb }}" alt="">
        </div>    
        <div>
            <strong>Price:</strong>
            ${{ $comic->price }}
        </div>    
        <div>
            <strong>Series:</strong>
            {{ $comic->series }} 
        </div>    
        <div>
            <strong>Sale date:</strong>
            {{ $comic->sale_date }} 
        </div>    
        <div>
            <strong>Type:</strong>
            {{ $comic->type }}
        </div>
        <div>
            <strong>Description:</strong>
            {{ $comic->description }} 
        </div>
        <div>
            <a href="{{ route('comics.index') }}">Torna alla pagina principale</a>
        </div>
    </section>
@endsection