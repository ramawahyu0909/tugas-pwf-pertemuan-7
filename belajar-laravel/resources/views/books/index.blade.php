@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    @if(count($books) > 0)
        <ul>
            @foreach($books as $index => $book)
                <li>
                    <strong>
                        <a href="/books/{{ $index + 1 }}">{{ $book['title'] }}</a>
                    </strong>
                    - Penulis: {{ $book['author'] }} (Tahun: {{ $book['year'] }})
                </li>
            @endforeach
        </ul>
    @else
        <p>Tiada buku yang tersedia.</p>
    @endif
@endsection