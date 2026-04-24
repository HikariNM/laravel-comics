@extends('layouts.app')

@section('title')
    Comics
@endsection

@php
    $comics = config("comics");
@endphp

@section('content')

<div class="container bg-dark py-4">

    <h5 class="text-uppercase fw-bold text-white mb-4 border-start border-primary border-3 ps-2">Current Series</h5>

    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
        @foreach ($comics as $comic)
        <div class="col">
            <x-card>
                <x-slot:title>{{ $comic['title'] }}</x-slot>
                <x-slot:img>{{ $comic['thumb'] }}</x-slot>
            </x-card>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-5">
        <button class="btn btn-primary text-uppercase fw-bold px-4 py-2 rounded-0">Load More </button>
    </div>
</div>

@endsection
