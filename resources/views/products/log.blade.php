@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Riwayat Produk</h2>
    <a href="{{ route('products.index') }}">← Kembali ke Daftar Produk</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Aksi</th>
                <th>Deskripsi</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->nama_produk }}</td>
                <td>{{ ucfirst($log->aksi) }}</td>
                <td>{{ $log->deskripsi }}</td>
                <td>{{ $log->created_at->format('d M Y, H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
