@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-3">
            <h1>LISTA MUSEI</h1>
            <div class="col py-5">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Nazione</th>
                        <th scope="col">Azioni</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($museums as $museum )
                            <tr>
                                <th scope="row">{{$museum->id}}</th>
                                <td>{{$museum->name}}</td>
                                <td>{{$museum->nation}}</td>
                                <td>
                                    <ul class="list-unstyled d-flex">
                                        <li><a class="btn btn-primary" href="{{route('admin.museums.show', $museum)}}" role="button">Show</a>
                                        </li>
                                        <li class="mx-2"><a class="btn btn-warning" href="{{route('admin.museums.edit', $museum)}}" role="button">Edit</a>
                                        </li>
                                        <li>
                                            @include('admin.museums.partials.delete-form')
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
