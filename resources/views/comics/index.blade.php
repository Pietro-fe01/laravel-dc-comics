@extends('layouts.scheme');

@section('page-title')
    Homepage
@endsection

<header class="container d-flex align-items-center">
    <h1 class="me-4">Lista Comics</h1>

    <a href="{{ route('comics.create') }}" class="btn btn-success my-4">
        Aggiungi un nuovo Comic
    </a>
</header>

@section('main-content')
    <section class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale_date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr class="table-row">
                        <th scope="row">{{ $comic->id }}</th>
                        <td>
                            @if ($comic->thumb)
                            <img src="{{ $comic->thumb }}" alt="thumb-comic.img">
                            @else
                            <img src="https://via.placeholder.com/192x221" alt="">
                            @endif
                        </td>
                        <td style="word-break:normal">{{ $comic->title }}</td>
                        <td>${{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary mb-2">
                                Vedi
                            </a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning text-white mb-2">
                                Edit
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger modal-delete-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$comic->id}}">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Deleting <span id="which-one">{{ null }}</span></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    Are you sure?
                </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form class="modal-form" action="{{ null }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
