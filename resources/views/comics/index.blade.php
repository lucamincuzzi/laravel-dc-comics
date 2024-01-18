@extends('layouts.app')

@section('content')
    <table class="table my-2">
        <h1 class="ms-5 mt-4">Fumetti</h1>
        <div class="text-end">
            <a class="btn btn-primary me-5" href="{{ route('comics.create') }}">Aggiungi un fumetto</a>
        </div>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Percorso immagine</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data uscita</th>
                <th scope="col">Genere</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->thumb }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td><a class="btn btn-success" href="{{ route('comics.show', ["comic" => $comic->id]) }}">Dettagli</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
