@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="card my-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="w-100" src=" {{ $comic['image'] }} " class="img-fluid rounded-start" alt=" {{ $comic['title'] }} ">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $comic['title'] }} </h5>
                            <p class="card-text"> {!! $comic['description'] !!} </p>
                            <p class="card-text"> Prezzo: <strong> {{ $comic['price'] }} &euro; </strong></p>
                            <p class="card-text"> Data Di Vendita: <strong> {{ $comic['sale_date'] }} </strong></p>
                            <p class="card-text"><small class="text-muted"> Serie: {{ $comic['series'] }} - Tipo: {{ $comic['type'] }} </small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mb-5">
                <a class="btn btn-primary mx-4" href=" {{ route('comics.index') }} "> <-- INDIETRO </a>
                <div>
                    @include('partials.form-delete', ['comic'=> $comic, 'rotta'=>'comics.destroy'])
                    @include('partials.button-edit')
                </div>
            </div>
        </div>
    </main>
@endsection
