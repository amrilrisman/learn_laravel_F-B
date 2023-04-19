@extends('layouts.main_layout')

@section('body')
    <h2 class="mb-4">Category</h2>

    <div class="container">
        <div class="scrollmenu">
            @foreach ($dataCategory as $category)
                <a href="/category/{{ $category->slug }}">
                    <div class="card text-bg-dark ">
                        <div class="rounded-3">
                            <img src="https://source.unsplash.com/300x100/?{{ $category->slug }}" class="card-img"
                                alt="{{ $category->name }}">
                        </div>
                        <h4 class="card-title position-absolute top-50 start-50 translate-middle px-4 py-1  rounded-3 "
                            style="background-color: rgba(0, 0, 0, 0.5)">{{ $category->name }}</h4>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <h2 class="mb-3 mt-4">Semua Blog</h2>
    <div class="row row-cols-3 mb-4">
        @foreach ($data as $item)
            <div class="col">

                <div class="card mb-2">

                    <a href="/blog/{{ $item->slug }}">
                        <img src="https://source.unsplash.com/350x150/?{{ $item->category->slug }}" class="card-img-top"
                            alt="{{ $item->category->name }}">
                    </a>

                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p> Creator by <small class="text-body-secondary"> {{ $item->author->name }}
                                {{ $item->created_at->diffForHumans() }}</small>
                        </p>
                        <p class="card-text">{{ $item->sorth_desc }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- Blog::create([
     'title' => "title judul keTiga",
     'slug' => "title-judul-keTiga",
     'sorth_desc' => "title judul keTiga",
     'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi voluptate error explicabo iure doloremque sequi, mollitia earum iste tempore dolorum rerum, consectetur dicta, totam veniam ut eius magnam tempora fugit! Obcaecati quod, similique officiis et debitis, tempora alias reiciendis, at aliquid voluptates nemo asperiores maiores vitae maxime est nisi ducimus? Cum voluptatem non quae ex corporis, dolorem veritatis error? Est velit fugit praesentium nam quaerat.</p><p>Omnis optio eius cupiditate repudiandae iste aspernatur quos animi deserunt, possimus eaque id suscipit. Vel ratione, quis quisquam repudiandae sequi saepe dolorum et iste reprehenderit aut voluptatum pariatur ad non nobis aspernatur obcaecati ipsum voluptas.</p>",
 ]); --}}
