<form
    onsubmit="return confirm('Vuoi davvero eliminare {{ $comic['title'] }}?, dopo non sarà possibile recuperarlo')"
    class="d-inline" action=" {{ route($rotta, $comic) }} " method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        <i class="fa-solid fa-trash"></i>
    </button>
</form>
