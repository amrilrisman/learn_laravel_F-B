@extends('layouts.main_detail_layout')

@section('title')
    {{ $data->title }}
@endsection
@section('body')
    <div class="row mt-5">
        <div class="col ">
            <a href="/blog" class="btn btn-primary mb-4 mt-4">Kembali Ke Blog</a>
            <h1 class="mb-2">{{ $data->title }}</h1>
            <small>Creator By : {{ $data->user->name }} | Post date : {{ $data->created_at->diffForHumans() }}</small>
            @if ($data->img)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="http://laravel-coba.test/{{ $data->img }}" class="card-img-top rounded-3 mb-4 " alt="{{ $data->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/350x150/?{{ $data->category->name }}"
                    class="card-img-top rounded-3 mb-4 mt-3" alt="{{ $data->category->name }}">
            @endif
            {!! $data->description !!}
            <a href="/blog">
                <button type="submit">
                    Kembali
                </button>
            </a>
        </div>
        <div class="col-3" style="background-color:gainsboro">

        </div>
    </div>
@endsection
