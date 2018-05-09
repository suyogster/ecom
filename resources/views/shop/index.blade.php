
@extends('layouts.welcome')
@section('title')
    Shopping Cart
@endsection

@section('content')
    @foreach($products->chunk(3) as $productChunk)

    <div class="row">
        @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
    <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$product->imagePath}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->description}}.</p>
            <p class="card-text">Price: {{$product->price}}</p>
            <a href="#" class="btn btn-success">Add to cart</a>
        </div>
    </div>
    </div>
            @endforeach
    </div>


@endforeach
@endsection