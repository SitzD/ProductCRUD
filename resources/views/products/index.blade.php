@extends('layouts.app')


@section('content')

    <div class="container">


        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td><a href="/products/{{$product->id}}/show" class="text-dark">{{ $product->name }}</a></td>
                    <td>{{ $product->description }}</td>
                    <td>LKR. {{ $product->price }}.00</td>
                    <td><img src="products/{{$product->image}}" class="img-thumbnail" alt="" width="50px" height="50px"></td>
                    <td>
                        <a href="products/{{ $product->id }}/edit" class="btn btn-primary">Edit</a>

                        <form action="/products/{{ $product->id }}/delete" class="d-inline" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <div class="text-right">
                        <a href="products/create" class="btn btn-dark mt-2">New Product</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

</body>
</html>
