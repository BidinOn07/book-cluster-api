<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="{{ $book->title }}"><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="{{ $book->author }}"><br>
        <label for="year_published">Year Published:</label><br>
        <input type="text" id="year_published" name="year_published" value="{{ $book->year_published }}"><br>
        <label for="read_count">Read Count:</label><br>
        <input type="text" id="read_count" name="read_count" value="{{ $book->read_count }}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
