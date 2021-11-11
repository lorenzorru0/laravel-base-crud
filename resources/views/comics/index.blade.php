@extends('layout.base')

@section('mainContent')
    <h1>List of all comics</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale_date</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic['id']}}</th>
                    <td>{{$comic['title']}}</td>
                    <td>{{$comic['description']}}</td>
                    <td>{{$comic['price']}} €</td>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td>{{$comic['type']}}</td>
                    <td>
                        <a class="d-block mb-1" href="{{route('comics.show', $comic['id'])}}"><button type="button" class="btn btn-info">View</button></a><br>
                        <a class="d-block mb-1" href="{{route('comics.edit', $comic['id'])}}"><button type="button" class="btn btn-warning">Edit</button></a><br>
                        <a class="d-block mb-1" href=""><button type="button" class="btn btn-danger">Delete</button></a><br>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection