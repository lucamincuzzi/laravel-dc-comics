@extends('layouts.app')

@section('content')
    <table class="table my-2">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Percorso immagine</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data uscita</th>
                <th scope="col">Genere</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
