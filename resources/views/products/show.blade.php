@extends('layouts.app')

@section('content')

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="/products/{{$product->image}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title ">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text"><small class="text-body-secondary">LKR. {{$product->price}}.00</small></p>
        </div>
      </div>
    </div>
</div>

@endsection
