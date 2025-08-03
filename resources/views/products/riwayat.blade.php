@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Riwayat Produk</h2>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Aksi</th>
                <th>Deskripsi</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($logs as $index => $log)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $log->nama_produk }}</td>
                    <td>{{ $log->aksi }}</td>
                    <td>{{ $log->deskripsi }}</td>
                    <td>{{ $log->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data riwayat.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4" style="text-align: right;">
    <a href="{{ route('products.index') }}" class="btn btn-secondary">← Kembali ke Daftar Produk</a>
</div>

</div>
@endsection
