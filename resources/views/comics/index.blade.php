@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <h1 class="text-center">
                TABELLA FUMETTI
            </h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">TITOLO</th>
                        <th scope="col">TIPO</th>
                        <th scope="col">SERIE</th>
                        <th scope="col">SETTINGS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic['id'] }}</th>
                            <td> {{ $comic['title'] }} </td>
                            <td> {{ $comic['type'] }} </td>
                            <td> {{ $comic['series'] }} </td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary" title="view"><i class="fa-solid fa-eye"></i></a>
                                <a href="#" class="btn btn-warning" title="modify"><i
                                        class="fa-solid fa-pencil"></i></a>
                                <a href="#" class="btn btn-danger" title="delete"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        @empty
                        <h2 class="text-center">
                            NESSUN RISULTATO TROVATO
                        </h2>
                        @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $comics->links() }}
            </div>
        </div>
    </main>
@endsection
