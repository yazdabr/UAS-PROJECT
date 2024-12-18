<?php

// app/Http/Controllers/CategoryController.php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Fungsi untuk menambahkan kategori baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        // Membuat kategori baru
        Category::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    // Fungsi untuk memperbarui kategori yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        // Mencari kategori berdasarkan ID
        $category = Category::findOrFail($id);

        // Memperbarui kategori
        $category->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }
}
