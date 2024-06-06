<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ApiController extends Controller
{
    public function getBooks()
    {
        return response()->json(Book::all());
    }

    public function getBook($id)
    {
        $book = Book::find($id);
        if ($book) {
            return response()->json($book);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    public function createBook(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year_published' => 'required|integer',
            'read_count' => 'required|integer',
        ]);

        $book = Book::create($validated);
        return response()->json($book, 201);
    }

    public function updateBook(Request $request, $id)
    {
        $book = Book::find($id);
        if ($book) {
            $validated = $request->validate([
                'title' => 'sometimes|required|string',
                'author' => 'sometimes|required|string',
                'year_published' => 'sometimes|required|integer',
                'read_count' => 'sometimes|required|integer',
            ]);

            $book->update($validated);
            return response()->json($book);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }

    public function deleteBook($id)
    {
        $book = Book::find($id);
        if ($book) {
            $book->delete();
            return response()->json(['message' => 'Book deleted']);
        } else {
            return response()->json(['message' => 'Book not found'], 404);
        }
    }
}
