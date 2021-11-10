@extends('layout.base')

@section('mainContent')
    <div class="row">
        <div class="col-3">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="col-9">
            <h2>Title: {{$comic['title']}}</h2>
            <p>Description: {{$comic['description']}}</p>
            <h4>Price: {{$comic['price']}}</h4>
            <h4>Series: {{$comic['series']}}</h4>
            <h4>Sale date: {{date("d-m-Y", $comic['sake_date'])}}</h4>
            <h4>Type: {{$comic['type']}}</h4>
        </div>
    </div>
@endsection