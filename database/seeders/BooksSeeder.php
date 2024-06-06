<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'year_published' => 1960,
                'read_count' => 5000,
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'year_published' => 1949,
                'read_count' => 7500,
            ],
            [
                'title' => 'Moby Dick',
                'author' => 'Herman Melville',
                'year_published' => 1851,
                'read_count' => 3000,
            ],
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'year_published' => 1925,
                'read_count' => 6000,
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'year_published' => 1813,
                'read_count' => 4000,
            ],
            [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'year_published' => 1869,
                'read_count' => 3500,
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'year_published' => 1951,
                'read_count' => 4500,
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'year_published' => 1937,
                'read_count' => 8000,
            ],
            [
                'title' => 'Fahrenheit 451',
                'author' => 'Ray Bradbury',
                'year_published' => 1953,
                'read_count' => 5000,
            ],
            [
                'title' => 'Jane Eyre',
                'author' => 'Charlotte Brontë',
                'year_published' => 1847,
                'read_count' => 4500,
            ],
        ];
        foreach ($data as $book) {
            Book::create($book);
        }
    }
}
