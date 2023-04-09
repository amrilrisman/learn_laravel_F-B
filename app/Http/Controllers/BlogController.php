<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\Profile;

class BlogController extends Controller
{
    public function blogs()
    {
        return view('blog', [
            "title" => "blog",
            "data" => Blog::all(),
        ]);
    }

    public function detailBlog($id)
    {
        return view('detail_blog', [
            "title" => Blog::find($id)->title,
            "data" => Blog::find($id),
        ]);
    }

    public function profile()
    {
        return view('profile', [
            "title" => 'profile',
            "data" => Profile::all()
        ]);
    }
}

