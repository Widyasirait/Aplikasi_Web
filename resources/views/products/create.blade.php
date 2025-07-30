@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Produk</h2>

    <form action="{{ route('products.store') }}" method="POST" style="display: flex; flex-direction: column; gap: 15px; max-width: 400px;">
        @csrf
        <input type="text" name="name" placeholder="Nama Produk" required style="padding: 12px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;">
        <input type="number" name="price" placeholder="Harga" required style="padding: 12px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;">
        <input type="number" name="stock" placeholder="Stok" required style="padding: 12px; font-size: 16px; border-radius: 6px; border: 1px solid #ccc;">
        <button type="submit" style="padding: 12px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 6px; cursor: pointer;">Simpan</button>
    </form>
</div>
@endsection
