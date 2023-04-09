@extends("layouts.main_detail_layout")

@section("title")
    {{$data->title}}
@endsection

@section("body")
    <h1>{{$data->title}}</h1>
    {!!$data->description!!}
    <a href="/blog">
        <button type="submit">
            Kembali
        </button>
    </a>
    
    
@endsection