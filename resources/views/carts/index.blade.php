@extends('layouts.admin')


@section('content')
<div class="container">


    <h1>Products of your Cart</h1>

{{-- <a name="" id="" class="btn btn-primary mb-3" href="{{route('products.create')}}" role="button">Create</a> --}}


    <div class="row">

        {{-- @foreach($allProducts as $product)

        <div class="col">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <small>{{$product->price}}</small>
                    <p class="card-text">{{$product->description}}</p>

                    @if(auth()->check())
                        <a href="{{route('products.edit', $product->id)}}">edit</a>

                        <form style="display:inline-block" action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif

                </div>
            </div>
        </div>

        @endforeach --}}




        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                <tr>
                    <td scope="row">{{$product->name}}</td>

                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
<td>

<img width='200px' height="150"src="{{asset('storage/'. $product->cover_image)}}" alt="Product_image">
</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{route('products.edit', $product->id)}}">edit</a>

                        <form style="display:inline-block" action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
