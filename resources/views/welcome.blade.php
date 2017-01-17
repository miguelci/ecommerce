@extends('layout')

@section('content')
    <h1>The welcome page</h1>
            @foreach($products as $product)
                <li>{{$product}}</li>
            @endforeach
@stop