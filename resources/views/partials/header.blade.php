<header>
    <div class="container">
        <div class="text-center mt-2 mb-5">
            <a href=" {{ route('comics.index') }} "> <img src=" {{ Vite::asset('resources/img/dc-logo.png') }} "
                    alt=" Logo "> </a>
            <h2 class="text-primary h1">
                DASHBOARD
            </h2>
        </div>
        <a class="btn btn-success mb-5" href=" {{ route('comics.create') }} "> AGGIUNGI NUOVO ELEMENTO </a>
    </div>
</header>
