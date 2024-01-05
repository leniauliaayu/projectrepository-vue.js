<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // asumsikan Anda memiliki model User
use App\Models\Book; // asumsikan Anda memiliki model Book

class AdminController extends Controller
{
    public function dataUser()
    {
        $books = Book::paginate(10); // ambil 10 data buku per halaman

        return view('admin.dataUser', compact('books')); // tampilkan view 'admin.dataUser' dan kirim data buku
    }

    public function repository()
    {
        $books = Book::paginate(10); // ambil 10 data buku per halaman

        return view('admin.repository', compact('books')); // tampilkan view 'admin.repository' dan kirim data buku
    }
}