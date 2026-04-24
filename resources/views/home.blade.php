@extends('layouts.app')
@section('title')
{{ ucfirst(str_replace('.', ' ', Request::route()->getName())) }}
@endsection
@section('content')
<div class="container str_replace">
    <h1 class="text-center py-5" style="height: 200px"> Welcome to the {{ ucfirst(str_replace('.', ' ', Request::route()->getName())) }}</h1>
</div>

@endsection