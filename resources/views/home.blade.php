@extends('layouts.main')

@section('container')
    <h1>Selamat Datang di Website milik Nauval Pradipta</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat, quas dolores quae dolorem commodi blanditiis porro odit accusamus reiciendis culpa eius explicabo facilis rem, consectetur, voluptatem libero ex expedita totam?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, eveniet, corporis hic sequi ipsam accusantium velit autem, voluptates repellendus sint vitae nemo itaque commodi excepturi! Minus repudiandae necessitatibus distinctio obcaecati?
    </p>
    <div class="card-body">
        @auth
        <p>Welcome <b>{{ Auth::user()->name }}</b></p>
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endguest
    </div>
@endsection