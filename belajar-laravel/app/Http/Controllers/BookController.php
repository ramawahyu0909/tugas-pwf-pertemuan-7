<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Pemrograman PHP Modern', 'author' => 'Budi Santoso', 'year' => 2021],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Ahmad Fauzi', 'year' => 2023],
            ['title' => 'Arsitektur Basis Data', 'author' => 'Rina Gunawan', 'year' => 2020],
            ['title' => 'Algoritma & Struktur Data', 'author' => 'Dian Pratama', 'year' => 2022],
            ['title' => 'Mastering Web Framework', 'author' => 'Eko Kurniawan', 'year' => 2024],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}