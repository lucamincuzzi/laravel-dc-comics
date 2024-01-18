@extends('layouts.app')

@section('content')
    <div class="container my-4 text-center">
        <h2>{{ $comic->title }}</h2>
        <div>{{ $comic->thumb }}</div>
        <hr>
        <ul>
            <li><strong>Prezzo: </strong>{{ $comic->price }}$</li>
            <li><strong>Serie: </strong>{{ $comic->series }}</li>
            <li><strong>Data uscita: </strong>{{ \Carbon\Carbon::parse($comic->sale_date)->format('y-m-d') }}</li>
            <li><strong>Genere: </strong>{{ $comic->type }}</li>
        </ul>
    </div>
@endsection
