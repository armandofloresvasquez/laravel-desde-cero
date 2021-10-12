
@extends('layouts.master')
@section('content')
    <div class="container">
    <h1 class="display-3">Products page</h1>
    @empty ($products)
        <div class="alert alert-warning">
            Esta lista esta vacía
        </div>
    @else
        <div class="row">
            <div class="table-responnsive">
                <table class="table table-sm table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->status}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        @endempty
    </div>

@endsection