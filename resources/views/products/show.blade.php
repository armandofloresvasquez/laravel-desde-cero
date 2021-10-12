@extends('layouts.master')
    @section('content')
        <h1 class="display-2">Detalles de producto</h1>
        <h1 class="display-3">{{$product->title}} ({{$product->id}})</h1>
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
        <p>{{$product->stock}}</p>
        <p>{{$product->sstatus}}</p>
    @endsection