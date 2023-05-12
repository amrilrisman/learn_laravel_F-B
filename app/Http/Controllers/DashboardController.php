<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.blog.index', [
            'data' => Blog::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.blog.create", [
            'dataCategory' => Category::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'img' => 'image|file|max:1200',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        if ($request->file('img')->store('image')) {
            $dataValidate['img'] =  $request->file('img')->store('image');
        }

        $dataValidate['sorth_desc'] = Str::limit($request->description, 50);
        $dataValidate['user_id'] = auth()->user()->id;
        $dataValidate['category_id'] = $request->category_id;
        $dataValidate['slug'] = $request->slug;
        $dataValidate['description'] = $request->description;
        $dataValidate['title'] = $request->title;

        $request->session()->flash('success', "Sukses menambahkan Data");
        Blog::create($dataValidate);

        return redirect('/dashboard/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view(
            "dashboard.blog.show",
            [
                'data' => $blog
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit', [
            'data' => $blog,
            'dataCategory' => Category::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

        $request->validate([
            'title' => 'required|max:255',
            'img' => 'image|file|max:1200',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        if ($blog->slug == $request->slug) {
            $request['slug'] = 'required|unique:blogs';
        }

        if ($request->file('img')->store('image') != $blog->img) {
            Storage::delete($blog->img);
            $dataValidate['img'] =  $request->file('img')->store('image');
        }


        $dataValidate['slug'] = $request->slug;
        $dataValidate['sorth_desc'] = Str::limit($request->description, 50);
        $dataValidate['user_id'] = auth()->user()->id;
        $dataValidate['category_id'] = $request->category_id;
        $dataValidate['description'] = $request->description;
        $dataValidate['title'] = $request->title;

        $request->session()->flash('success', "Sukses ubah Data");
        Blog::where('id', $blog->id)->update($dataValidate);

        return redirect('/dashboard/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Storage::delete($blog->img);
        Blog::destroy($blog->id);

        return redirect('/dashboard/blog')->with('success', 'Berhasil Menahapus Blog' . $blog->title);
    }
}
