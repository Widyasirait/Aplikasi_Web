@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-4 mb-4">Daftar Produk</h2>

    @if (session('success'))
    <div id="success-alert" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <script>
    setTimeout(function () {
        var alert = document.getElementById('success-alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 1000); 
</script>

    <div class="mb-3 d-flex justify-content-between">
        <a href="{{ route('products.riwayat') }}" class="btn btn-outline-secondary">Lihat Riwayat</a>
        <a href="{{ route('products.create') }}" class="btn btn-primary">+ Tambah Produk</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>
                            @if($product->stock <= 5)
                                <span class="badge bg-danger">{{ $product->stock }}</span>
                            @elseif($product->stock <= 10)
                                <span class="badge bg-warning text-dark">{{ $product->stock }}</span>
                            @else
                                <span class="badge bg-success">{{ $product->stock }}</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-info btn-sm me-1">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Tidak ada produk tersedia.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
