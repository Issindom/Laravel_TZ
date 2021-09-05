<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Authors;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $filterAuthor = $request->get('author');

        if ($filterAuthor && is_array($filterAuthor)) {
            // $bookModel = new Books();
            // $books = $bookModel->authors()->whereIn('authors.id', $filterAuthor)->get();

            // dd($filterAuthor, $books);

            $bookModel = new Books();
            $books = $bookModel->with('authors')->get();
        } else {
            $bookModel = new Books();
            $books = $bookModel->with('authors')->get();
        }

        $authorModel = new Authors();
        $authors = $authorModel->get();

        return view('books', ['books' => $books, 'authors' => $authors]);
    }

     public function delete($id, Request $request)
    {
        $book = new Books();
        $book = $book->where('id', $id);
        $book->delete();

        return redirect()->action([self::class, 'index']);
    }
}

