@extends('layouts.link', ['class' => 'link'])

@section('content')
    <header>
        <h1 class="brand">nxu Link</h1>

        <div class="user-menu">
            @if (auth()->check())
                <a href="/my-links">
                    <i class="fa fa-fw fa-link"></i>
                    <span>My links</span>
                </a>
                <a href="/logout">
                    <i class="fa fa-fw fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            @else
                <a href="/login">
                    <i class="fa fa-fw fa-facebook"></i>
                    <span>Login</span>
                </a>
            @endif
        </div>
    </header>

    <section class="generate">
        <div class="container">
            <div class="box-content">
                <h2 class="title is-4">Shorten a link</h2>
                <form id="shorten-form">
                    {{ csrf_field() }}

                    <input autofocus
                           type="text"
                           name="url"
                           class="shorten-input"
                           placeholder="http://my-url.com">

                    <button  class="button is-warning is-large" type="submit">
                        <i class="fa fa-fw fa-link"></i> Shorten
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="result is-visible">
        <div class="container">
            <div class="box-content">
                <div class="loader">
                </div>

                <input type="text"
                       readonly
                       name="result"
                       id="result-input"
                >
            </div>
        </div>
    </section>
@endsection
