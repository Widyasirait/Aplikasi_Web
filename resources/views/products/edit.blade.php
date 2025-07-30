@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Produk</h2>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" required><br>
        <input type="number" name="price" value="{{ $product->price }}" required><br>
        <input type="number" name="stock" value="{{ $product->stock }}" required><br>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
