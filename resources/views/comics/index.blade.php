@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="ms-5 mt-4 text-center">Fumetti</h1>
        <table class="table my-2">
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
                    <th class="text-center" scope="col">Azioni</th>
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
                        <td class="w-50">
                            <a class="btn btn-success"
                                    href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli</a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
