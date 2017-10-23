@extends('layouts.master')



@section('content')
<div class="columns">
    <div class="column">
        <aside class="menu">
            <ul class="menu-list">
                <li>
                    <a class="{{ request()->is('repo/*/summary') ? 'is-active' : '' }}" href='{{ url("/repo/{$response['slug']}/summary") }}'>
                        <span class="icon">
                            <i class="fa fa-cog"></i>
                        </span>
                        Resumen
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('repo/*/branches') ? 'is-active' : '' }}" href='{{ url("/repo/{$response['slug']}/branches") }}'>
                        <span class="icon">
                            <i class="fa fa-code-fork"></i>
                        </span>
                        Ramas
                    </a>
                </li>
            </ul>
        </aside>
    </div>
    <div class="column is-three-quarters">
        
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li>
                    <span class="icon">
                        <i class="fa fa-home"></i>
                    </span>
                    <a href='{{ url("/repo/overview") }}'>Repositorios</a>
                </li>
                <li class="is-active"><a href="#" aria-current="page">{{ $response['name'] }}</a></li>
                <li class="is-active"><a href="#" aria-current="page">@yield('titulo')</a></li>
            </ul>
        </nav>

        <h1 class="title is-4"> @yield('titulo') </h1>
        <h2 class="subtitle is-6"> @yield('subtitulo') </h2>
        
        @yield('html')
    </div>
</div>


@endsection
