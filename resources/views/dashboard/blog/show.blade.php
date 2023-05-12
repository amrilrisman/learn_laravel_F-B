@extends('dashboard.layouts.main_dashboard')

@section('titleBody')
    {{ $data->title }}
@endsection

@section('body')
    <div class="row mb-4">
        <div class="col ">
            <a href="/dashboard/blog" class="btn btn-primary mb-4 mt-4">Kembali Ke Blog</a>
            <h1 class="mb-2">{{ $data->title }}</h1>
            @if ($data->img)
                <img src="http://laravel-coba.test/{{ $data->img }}" style="height: 300px; overflow:hidden" class="card-img-top rounded-3 mb-4 mt-3"
                    alt="{{ $data->category->name }}">
            @else
                <img src="https://source.unsplash.com/350x150/?{{ $data->category->name }}"
                    class="card-img-top rounded-3 mb-4" alt="{{ $data->category->name }}">
            @endif
            {!! $data->description !!}

        </div>
        <div class="col-3" style="background-color:gainsboro">

        </div>
    </div>
@endsection
