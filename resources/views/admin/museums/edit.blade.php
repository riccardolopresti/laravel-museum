@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title text-capitalize fs-3">Modifica Museo "{{ $museum->name }}"</h1>
        <form action="{{ route('admin.museums.update', $museum) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">Nome *</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $museum->name) }}"
                    id="name" placeholder="Modifica qui il nome del museo">
            </div>
            <div class="mb-3">
                <label for="nation" class="form-label">Nazione *</label>
                <input type="text" class="form-control" name="nation" value="{{ old('client_name', $museum->nation) }}"
                    id="nation" placeholder="Modifica qui la nazione del museo">
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
            <a class="btn btn-danger" href="{{ route('admin.museums.index') }}">Annulla e Torna alla Lista</a>
        </form>
    </div>
@endsection
