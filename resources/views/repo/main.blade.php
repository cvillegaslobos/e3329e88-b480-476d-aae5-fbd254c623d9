@extends('layouts.master')


@section('content')  

@include('components.toolbar')

<table class="table table is-hoverable is-fullwidth ">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Lenguaje</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($repos as $repo)
        
        <tr>
            <td>
                <a href="/repo/{{ $repo['slug'] }}/summary">{{ $repo['name'] }}</a>
            </td>
            <td>
                {{ $repo['description'] }}
            </td>
            <td>
                {{ $repo['language'] }}
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>
@endsection