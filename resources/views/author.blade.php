@extends('layouts.main_layout');

@section('body')
    <h2 style="margin-bottom: 20px">Penulis</h2>
    <div class="row row-cols-2">
        @foreach ($data as $item)
            {{-- <a href="/author/{{ $item->username }}"> --}}

            <div class="row row-cols-2" style="align-items: center">
                <div style="height: 70px; width:70px" style="background-color: red">
                    <img src="https://source.unsplash.com/50x50/?person" class="rounded-circle" alt="{{ $item->name }}">
                </div>
                <div class="card-body">
                    <h4>{{ $item->name }}</h4>
                    <p> Blog : {{ count($item->blog) }}</p>
                </div>
            </div>
            {{-- </a> --}}
        @endforeach
    </div>
@endsection
