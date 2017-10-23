@extends('layouts.master')

@section('content')            
    <table class="table is-bordered is-striped is-fullwidth ">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Lenguaje</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($response['values'] as $repo)
            
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