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
                        <form action="{{route('comics.destroy', $comic['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">Delete</button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Delete comic validation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure that you want delete {{$comic['title']}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                </div>
                            </div>
                            </div>                           
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection