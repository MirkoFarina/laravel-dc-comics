@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <h1>
                MODIFICA {{ $comic['title'] }}:
            </h1>
            <div>
                <a class="btn btn-primary" href=" {{ route('comics.index') }} "> <-- INDIETRO </a>
                @include('partials.button-show')
                @include('partials.form-delete', ['comic'=>$comic, 'rotta'=>'comics.destroy'])
            </div>
            <form action=" {{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo*:</label>
                    <input type="text" name="title" value=" {{ old('title', $comic['title']) }} "
                        class="form-control @error('title') is-invalid   @enderror " id="title"
                        placeholder="Titolo ...">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">URL Immagine:</label>
                    <input type="text" name="image" value=" {{ old('image',  $comic['image']) }} "
                        class="form-control  @error('image') is-invalid   @enderror" id="image" placeholder="URL ...">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo*: </label>
                    <input type="text" name="price" value=" {{ old('price',  $comic['price']) }} "
                        class="form-control  @error('price') is-invalid   @enderror" id="price" placeholder="#.##">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie*:</label>
                    <input type="text" name="series" value=" {{ old('series',  $comic['series']) }} "
                        class="form-control  @error('series') is-invalid   @enderror" id="series"
                        placeholder="SERIE ...">
                    @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita*:</label>
                    <input type="text" name="sale_date" value=" {{ old('sale_date',  $comic['sale_date']) }} "
                        class="form-control  @error('sale_date') is-invalid   @enderror" id="sale_date"
                        placeholder="YYYY/MM/DD ">
                    @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo*:</label>
                    <input type="text" name="type" value=" {{ old('type',  $comic['type']) }} "
                        class="form-control  @error('type') is-invalid   @enderror" id="type" placeholder="TIPO ...">
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Inserisci la descrizione:</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="descrizione ..."> {{ old('description',  $comic['description']) }} </textarea>
                </div>
                <button class="btn btn-primary" type="submit"> INVIO </button>
            </form>
        </div>
    </main>
@endsection
