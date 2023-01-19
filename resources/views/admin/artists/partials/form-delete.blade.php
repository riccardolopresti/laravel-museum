<form onsubmit="return confirm('Vuoi cancellare definitavamente {{$artist->name}}')" class="" action="{{ route('admin.artists.destroy', $artist) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" title="delete" >Cancella artista</button>
</form>

