<!-- resources/views/books/form.blade.php -->

<form method="POST" action="{{ isset($book) ? route('books.update', $book->id) : route('books.store') }}">
    @csrf
    @isset($book)
        @method('PUT')
    @endisset
    <label for="title">Judul:</label>
    <input type="text" id="title" name="title" value="{{ isset($book) ? $book->title : '' }}">
    <label for="author">Penulis:</label>
    <input type="text" id="author" name="author" value="{{ isset($book) ? $book->author : '' }}">
    <label for="year_published">Tahun Terbit:</label>
    <input type="text" id="year_published" name="year_published" value="{{ isset($book) ? $book->year_published : '' }}">
    <button type="submit">{{ isset($book) ? 'Update' : 'Tambah' }}</button>
</form>
