@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="m-3 text-center">Elenco Artisti</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($artists as $artist )
            <tr>
                <td>{{$artist->id}}</td>
                <td>{{$artist->name}}</td>
                <td>
                    <a class="btn btn-warning " href="{{route('admin.artists.edit', $artist)}}" title="edit">EDIT</a>
                    <form class="d-inline"
                    onsubmit="return confirm('Confermi l\'eliminazione?')"
                    action="{{route('admin.artists.destroy', $artist)}}" method="POST">
                      @csrf
                      @method('DELETE')
                        <button type="submit" class="btn btn-danger " title="delete">DELETE</button>
                    </form>
                </td>
            </tr>

            @empty
            <h2>Nessun artista trovato</h2>
            @endforelse

        </tbody>
    </table>


</div>

@endsection
