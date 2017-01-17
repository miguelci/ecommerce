@extends('layout')

@section('content')

    <h1>All products</h1>

    <ul>
        @foreach($products as $product)
            <li>{{$product->name}}</li>
        @endforeach
    </ul>

@stop