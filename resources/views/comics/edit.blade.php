@extends('layout.base')

@section('mainContent')
    <h1>Edit comics</h1>

    <form action="{{route('comics.update', $comic['id'])}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Write the title" value="{{old('title') ? old('title') : $comic['title']}}">

            @error('title')
                <div class="alert alert-danger mt-1" role="alert">
                    <div>{{$message}}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Write the descriptiom">{{old('description') ? old('description') : $comic['description']}}</textarea>
            
            @error('description')
                <div class="alert alert-danger mt-1" role="alert">
                    <div>{{$message}}</div>
                </div>
            @enderror        
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image's url</label>
            <textarea name="thumb" id="thumb" cols="30" rows="3" class="form-control" placeholder="Write the url image">{{old('thumb') ? old('thumb') : $comic['thumb']}}</textarea>
        
            @error('thumb')
                <div class="alert alert-danger mt-1" role="alert">
                    <div>{{$message}}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Write the price" value="{{old('price') ? old('price') : $comic['price']}}">
        
            @error('price')
                <div class="alert alert-danger mt-1" role="alert">
                    <div>{{$message}}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Write the serires" value="{{old('series') ? old('series') : $comic['series']}}">
        
            @error('series')
                <div class="alert alert-danger mt-1" role="alert">
                    <div>{{$message}}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic['sale_date']}}">
        
            @error('sale_date')
                <div class="alert alert-danger mt-1" role="alert">
                    <div>{{$message}}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Write the type" value="{{old('type') ? old('type') : $comic['type']}}">
        
            @error('type')
                <div class="alert alert-danger mt-1" role="alert">
                    <div>{{$message}}</div>
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection