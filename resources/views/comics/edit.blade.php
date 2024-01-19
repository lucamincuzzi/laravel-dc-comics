@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mt-4">Modifica i dettagli del fumetto</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="9" name="description">{{ $comic->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="image" name="thumb" value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <select id="type" class="form-select" name="type" value="{{ $comic->type }}">
                            <option value="">Seleziona</option>
                            <option @selected($comic->type === 'comic book') value="comic book">fumetto</option>
                            <option @selected($comic->type === 'graphic novel') value="graphic novel">graphic novel</option>
                          </select>
                    </div>


                    <button class="btn btn-success" type="submit">Salva modifiche</button>
                   
                </form>
            </div>
        </div>
       
    </div>
@endsection