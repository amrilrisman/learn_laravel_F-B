<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogDetailResource;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\Category;
use App\Models\Profile;
use Clockwork\Storage\Search;

class BlogController extends Controller
{

    public function getDataBlog()
    {
        return BlogResource::collection(Blog::latest()->get()); // list
    }

    public function blogDetail($id)
    {
        // dd("slug");
        return new BlogDetailResource(Blog::with(['user:id,username', 'category:id,name,slug'])->find($id)); // array asosiatif
        // return response()->json(Blog::find($id));
    }

    public function blogs()
    {
        return view('blog', [
            "title" => "blog",
            "data" => Blog::with(['user', 'category'])->latest()->search(request('search'))->get(),
            "dataCategory" => Category::with(['blog'])->latest()->get(),
        ]);
    }

    public function detailBlog(Blog $blog)
    {
        return view('detail_blog', [
            "data" => $blog,
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
