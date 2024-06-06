<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <h1>Book List</h1>
    <a href="{{ route('books.create') }}">Add Book</a>
    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->title }} - {{ $book->author }}
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('books.edit', $book) }}">Edit</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
