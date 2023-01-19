@extends('layouts.app')


@section('content')
<div class="container h-100 ">
    <h1 class="text-center my-5">Crea un nuovo artistat</h1>
    <div class="row d-flex">

        <form action="{{route('admin.artists.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome *</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Insert name">
            </div>

            <button type="submit" class="btn btn-primary mb-5">Invia</button>
        </form>
    </div>
</div>
@endsection
