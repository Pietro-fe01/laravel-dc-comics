@extends('layouts.scheme');

@section('page-title')
    Comic
@endsection

@section('main-content')
    <section class="container">
        <h1>{{ $comic->title }}</h1>


    </section>
@endsection