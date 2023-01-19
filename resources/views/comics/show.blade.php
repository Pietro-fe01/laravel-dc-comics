@extends('layouts.scheme');

@section('page-title')
    Comic
@endsection

@section('main-content')
    <section class="container">
        <h1>{{ $comic->title }}</h1>
        <div>
            <img src="{{ $comic->thumb }}" alt="">
        </div>    
        <div>
            {{ $comic->price }} 
        </div>    
        <div>
            {{ $comic->series }} 
        </div>    
        <div>
            {{ $comic->sale_date }} 
        </div>    
        <div>
            {{ $comic->type }}
        </div>
        <div>
        {{ $comic->description }} 
        </div>
        <div>
            <a href="{{ route('comics.index') }}">Torna alla pagina principale</a>
        </div>
    </section>
@endsection