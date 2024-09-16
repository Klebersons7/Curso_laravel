@extends('layouts.main')

@section('title', 'Produto')

@section('content')


@if($busca != '')
    <p>O usuario está buscado por {{busca}}</p>
@endif



<h1>Tela de produtos</h1>

@endsection