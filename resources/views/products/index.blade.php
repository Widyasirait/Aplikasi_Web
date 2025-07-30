@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Produk</h2>

    @if(session('success'))
        <div style="color: #F0FFFF;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}">+ Tambah Produk</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>git push -u origin main
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>Rp{{ number_format($product->price) }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
