@extends('layouts.app')

@section('content')
    <div class="container h-100 w-100">
        <h1 class="title">Nuovo Museo</h1>
        <form action="{{ route('admin.museums.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome *</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name"
                    placeholder="Scrivi qui il nome del museo">
            </div>
            <div class="mb-3">
                <label for="nation" class="form-label">Nazione *</label>
                <input type="text" class="form-control" name="nation" value="{{ old('nation') }}" id="nation"
                    placeholder="Scrivi qui la nazione del museo">
            </div>
            <button type="submit" class="btn btn-info">Invia</button>
            <a class="btn btn-danger" href="{{ route('admin.museums.index') }}">Annulla e Torna alla Lista</a>
        </form>
    </div>
@endsection
