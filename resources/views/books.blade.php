<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
</head>
<body>
    @foreach ($books as $book)
        <p>{{ $book->title }}</p>
    @endforeach
</body>
</html>
