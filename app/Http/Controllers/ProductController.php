<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductLog;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $product = Product::create($request->all());

        ProductLog::create([
            'product_id'   => $product->id,
            'nama_produk'  => $product->name,
            'aksi'         => 'tambah',
            'deskripsi'    => 'Menambahkan produk baru',
        ]);

        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $product->update($request->all());

        ProductLog::create([
            'product_id'   => $product->id,
            'nama_produk'  => $product->name,
            'aksi'         => 'edit',
            'deskripsi'    => 'Mengedit produk',
        ]);

        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product)
    {
    
        ProductLog::create([
            'product_id'   => $product->id,
            'nama_produk'  => $product->name,
            'aksi'         => 'hapus',
            'deskripsi'    => 'Menghapus produk',
        ]);

        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil dihapus.');
    }

    public function riwayat()
    {
        $logs = ProductLog::orderBy('created_at', 'desc')->get();
        return view('products.riwayat', compact('logs'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
