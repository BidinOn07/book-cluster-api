<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* CSS untuk layout bisa ditambahkan di sini */
    </style>
</head>
<body>
    <nav>
    <ul>
            <li><a href="{{ route('books.index') }}">Daftar Buku</a></li>
            <li><a href="{{ route('books.create') }}">Tambah Buku</a></li>
        </ul>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>
