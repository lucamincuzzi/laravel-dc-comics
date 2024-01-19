@extends('layouts.app')

@section('content')
    {{-- Messaggio di avvenuta modifica dell'elemento --}}
    @if (session('edit_message'))
        <div class="container my-3 w-50 text-center alert alert-success">
            {{ session('edit_message') }}
        </div>
    @endif
    {{-- /Messaggio di avvenuta modifica dell'elemento --}}
    <div class="container my-4 text-center">
        <h2 class="mb-4">{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="">
        <p class="mt-4"><strong>Sinossi:</strong></p>
        <div>
            <td>{{ $comic->description }}</td>
        </div>
        <hr>
        <div class="info d-flex justify-content-center">
            <div>
                <p><strong>Prezzo:</strong></p>
                <p><strong>Serie:</strong></p>
                <p><strong>Data uscita:</strong></p>
                <p><strong>Genere:</strong></p>
            </div>
            <ul class="d-flex flex-column gap-3">
                <li>{{ $comic->price }}</li>
                <li>{{ $comic->series }}</li>
                <li>{{ \Carbon\Carbon::parse($comic->sale_date)->format('d-m-Y') }}</li>
                <li>{{ $comic->type }}</li>
            </ul>
        </div>
    </div>
@endsection
