@extends('layouts.app')
@section('title')
{{ ucfirst(str_replace('.', ' ', Request::route()->getName())) }}
@endsection
@section('content')
    <div class="container text-light">
        <h1 class="text-center py-5" style="height: 200px"> This is the {{ ucfirst(str_replace('.', ' ', Request::route()->getName())) }}</h1>
    </div>
    
@endsection