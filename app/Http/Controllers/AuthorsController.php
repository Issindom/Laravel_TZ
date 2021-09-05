<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        $authorModel = new Authors();
        $authors = $authorModel->get();

        return view('authors', ['authors' => $authors]);
    }
    public function delete($id, Request $request)
    {
        $author = new Authors();
        $author = $author->where('id', $id);
        $author->delete();

        return redirect()->action([self::class, 'index']);
    }
}
