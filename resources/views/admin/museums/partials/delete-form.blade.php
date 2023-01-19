<form class="d-inline" action="{{ route('admin.museums.destroy', $museum)  }}" method="POST"
    onsubmit="return confirm('Confermi l\'eliminazione del museo {{ $museum->name }}?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" title="delete" type="submit">
        <i class="fa-solid fa-trash-can"></i>
    </button>
</form>
