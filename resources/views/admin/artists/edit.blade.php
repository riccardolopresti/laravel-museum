@extends('layouts.app')


@section('content')
<div class="container h-100 ">
    <h1 class="text-center my-5">Modifica <strong class="">{{$artist->name}}</strong></h1>
    <div class="row d-flex">


        <form action="{{route('admin.artists.update',$artist)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome *</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name',$artist->name)}}" placeholder="Insert name">
            </div>


            <div class="buttons my-5">
                <button type="submit" class="btn btn-success">Invia</button>
                <a class="btn btn-warning mt-2" href="{{ route('admin.artists.index') }}">Annulla</a>
            </div>
        </form>
        @include('admin.artists.partials.delete-form')
    </div>
</div>
@endsection
