@extends('layouts.app')

@section('content')
    <ul>
        <li>
            <a href="{{route('admin.artists.index')}}">Artist</a>
        </li>
        <li>
            <a href="#">Museum</a>
        </li>
    </ul>
@endsection
