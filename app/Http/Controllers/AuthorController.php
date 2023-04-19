<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author()
    {
        return view('author', [
            'title' => 'author',
            'data' => Author::all()

        ]);
    }

    public function detailAuthor(Author $author)
    {
        return view('detail_author', [
            'data' => $author
        ]);
    }
}
