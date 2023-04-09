@extends("layouts.main_layout")

@section("body")
    <h1>{{$title}}</h1>
    <ul>
        <li> Name  : {{ $data[0]->name}}</li>
        <li> age  :  {{$data[0]->age}}</li>
        <li> email  : {{$data[0]->email}}</li>
        
    </ul>
    
@endsection