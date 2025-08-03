@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Produk</h2>

    <form action="{{ route('products.update', $product) }}" method="POST" style="display: flex; flex-direction: column; gap: 15px; max-width: 400px;">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $product->name }}" required 
               style="padding: 12px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;" 
               placeholder="Nama Produk">

        <input type="number" name="price" value="{{ $product->price }}" required 
               style="padding: 12px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;" 
               placeholder="Harga">

        <input type="number" name="stock" value="{{ $product->stock }}" required 
               style="padding: 12px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;" 
               placeholder="Stok">

        <button type="submit" 
                style="padding: 12px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 6px; cursor: pointer;">
            Update
        </button>
    </form>

    <div class="mt-4" style="text-align: right;">
    <a href="{{ route('products.index') }}" class="btn btn-secondary">← Kembali ke Daftar Produk</a>
</div>
</div>
@endsection
