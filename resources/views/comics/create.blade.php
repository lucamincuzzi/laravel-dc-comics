@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mt-4">Aggiungi un nuovo fumetto</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="image" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="cooking_time" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="cooking_time" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="weight" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Data uscita</label>
                        <input type="date" class="form-control" id="weight" name="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Genere</label>
                        <select id="type" class="form-select" name="type">
                            <option selected value="">Seleziona</option>
                            <option value="comic book">fumetto</option>
                            <option value="graphic novel">graphic novel</option>
                          </select>
                    </div>


                    <button class="btn btn-success" type="submit">Salva</button>
                   
                </form>
            </div>
        </div>
       
    </div>
@endsection