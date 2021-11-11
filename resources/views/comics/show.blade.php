@extends('layout.base')

@section('mainContent')
    <div class="row">
        <div class="col-3">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="col-9">
            <h2>Title: {{$comic['title']}}</h2>
            <p>Description: {{$comic['description']}}</p>
            <h4>Price: {{$comic['price']}} €</h4>
            <h4>Series: {{$comic['series']}}</h4>
            <h4>Sale date: {{$comic['sale_date']}}</h4>
            <h4>Type: {{$comic['type']}}</h4>
            <a class="d-block mb-1" href="{{route('comics.edit', $comic['id'])}}"><button type="button" class="btn btn-warning">Edit</button></a>
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
        </div>
    </div>
@endsection