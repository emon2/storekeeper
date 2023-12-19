<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('content')
    <h1>Product List</h1>

    @foreach ($products as $product)
        <p>{{ $product->name }} - Price: ${{ $product->price }} - Quantity: {{ $product->quantity }}</p>
    @endforeach
@endsection

</body>
</html>
