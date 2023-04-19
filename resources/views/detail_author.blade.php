@extends('layouts.main_detail_layout')

@section('title')
    {{ $data->username }}
@endsection

@section('body')
    <a href="/author" style="font-size: 15pt ;font-weight: 600; color:blue">Kembali Ke Author</a>
    <h1 style="margin-bottom: 20px; margin-top: 30px"> Penulis : {{ $data->name }}</h1>



    @if (count($data->blog) == 0)
        <h5 style="display:contents;">Data Kosong Fuk</h5>
    @else
        @foreach ($data->blog as $item)
            <a href="/blog/{{ $item->slug }}">
                <article class="mb-50">
                    <h1>{{ $item->title }}</h1>
                    <p>{{ $item->sorth_desc }}</p>
                </article>
            </a>
        @endforeach
    @endif
@endsection
