@extends('layouts.app')

@section('content')
    <h1>Detail Produk</h1>
    <p>Nama: {{ $product->name }}</p>
    <p>Harga: {{ $product->price }}</p>
    <p>Stok: {{ $product->stock }}</p>
@endsection
