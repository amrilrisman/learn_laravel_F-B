@extends("layouts.main_layout")

@section("body")

    
        <div class="row row-cols-3">
            @foreach ($data as $item) 
            <a href="/blog/{{$item->id}}">
                <article class="mb-50">
                    <h1>{{$item->title}}</h1>
                    <p>{{ $item->sorth_desc }}</p>
                </article>
            </a>
            @endforeach    
        </div>



@endsection