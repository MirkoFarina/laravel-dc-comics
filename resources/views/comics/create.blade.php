@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <h1>
                AGGIUNGI UN NUOVO FUMETTO:
            </h1>
            <form action=" {{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Titolo ...">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">URL Immagine:</label>
                    <input type="text" name="image" class="form-control" id="image" placeholder="URL ...">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo: </label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="#.##">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" name="series" class="form-control" id="series" placeholder="SERIE ...">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita:</label>
                    <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="YYYY/MM/DD ">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo:</label>
                    <input type="text" name="type" class="form-control" id="type" placeholder="TIPO ...">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Inserisci la descrizione:</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="descrizione ..."></textarea>
                </div>
                <button class="btn btn-primary" type="submit"> INVIO </button>
            </form>
        </div>
    </main>
@endsection
