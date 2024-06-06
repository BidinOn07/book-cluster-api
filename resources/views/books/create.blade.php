<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value=""><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value=""><br>
        <label for="year_published">Year Published:</label><br>
        <input type="text" id="year_published" name="year_published" value=""><br>
        <label for="read_count">Read Count:</label><br>
        <input type="text" id="read_count" name="read_count" value=""><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
