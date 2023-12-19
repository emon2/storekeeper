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
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>

        <label for="price">Product Price:</label>
        <input type="number" name="price" required>

        <label for="quantity">Product Quantity:</label>
        <input type="number" name="quantity" required>

        <button type="submit">Add Product</button>
    </form>
@endsection

</body>
</html>
