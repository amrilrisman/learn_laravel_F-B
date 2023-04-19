@extends('layouts.main_detail_layout')

@section('body')
    <div class="row mt-4" style="align-items: center">
        <div class="col-2">
            <a href="/blog" class="btn btn-primary">Kembali Ke Blog</a>
        </div>
        <div class="col-4">
            <h1>Kategori : {{ $data->name }}</h1>
        </div>

    </div>

    <div class="row row-cols-3 mt-50px" style="margin-top:20px">
        @foreach ($dataBlog as $item)
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
