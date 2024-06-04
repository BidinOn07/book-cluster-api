<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // Ganti ini dengan model Anda sendiri

class ApiController extends Controller
{
    public function getBooks()
    {
        $books = Book::all(); // Ganti ini dengan query Anda sendiri

        return view('books', compact('books'));
    }
}
