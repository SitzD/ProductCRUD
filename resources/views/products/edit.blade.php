@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h2 class="text-muted">Product Edit -ID-{{ $product->id }}</h2>
                    <form action="/products/{{ $product->id }}/update" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">

                            @if($errors->has('name', $product->id))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}">
                            @if($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description', $product->description) }}</textarea>
                            @if($errors->has('Description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" id="image" class="form-control" value="{{ old('image', $product->image) }}">
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

