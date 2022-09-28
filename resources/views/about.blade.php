@extends('layouts.main')

@section('container')
    <h1>Tentang Saya</h1>
    <h3>Nama saya {{ $name }}, seorang desainer Logo, Branding, dan UI/UX</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus natus sunt eaque magnam facere, laborum rerum perferendis molestias odio eos et cumque odit fugiat quas voluptate quod vero? Expedita, dolore. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex libero, quaerat dolor accusantium ab soluta hic sint ullam, fuga quo laboriosam, vel et neque eveniet excepturi! Quod aspernatur accusantium dolore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, laboriosam maxime. Odio molestias, reprehenderit culpa ullam odit quam magnam. Et dolorum sapiente eaque vero sunt, nisi quod dolor at accusamus!</p>
@endsection