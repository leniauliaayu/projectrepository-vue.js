<!-- resources/views/admin/dataUser.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data User</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $books->links() }} <!-- Tampilkan link paginasi -->
</div>
@endsection