@extends('layouts.master')

@section('top')
<!-- Left side -->
<div class="level-left">
    <div class="level-item">
        <p class="subtitle is-5">
            <strong>123</strong> posts
        </p>
    </div>
    <div class="level-item">
        <div class="field has-addons">
            <p class="control">
                <input class="input" type="text" placeholder="Find a post">
            </p>
            <p class="control">
                <button class="button">Search</button>
            </p>
        </div>
    </div>
</div>

<!-- Right side -->
<div class="level-right">
    <p class="level-item"><strong>All</strong></p>
    <p class="level-item"><a>Published</a></p>
    <p class="level-item"><a>Drafts</a></p>
    <p class="level-item"><a>Deleted</a></p>
    <p class="level-item"><a class="button is-success">New</a></p>
</div>
@endsection

@section('content')            

<table class="table table is-hoverable is-fullwidth ">
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
                <span class="icon">
                    <i class="fa fa-database"></i>
                </span>
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