@extends('layouts.master')
    @section('content')
    <div class="container">
    <h1 class="display-2">Create a Products</h1>
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <div class="form-row">
                <label for="">Title</label>
                <input class="form-control" type="text" name="title" required>
            </div>
            <div class="form-row">
                <label for="">Description</label>
                <input class="form-control" type="text" name="description" required>
            </div>
            <div class="form-row">
                <label for="">Price</label>
                <input class="form-control" type="number" name="price" min="1.00" step="0.01" required>
            </div>
            <div class="form-row">
                <label for="">Stock</label>
                <input class="form-control" type="number" min="0" name="stock" required>
            </div>
            <div class="form-row">
                <label for="">Status</label>
                <select class="custom-select" name="status">
                    <option value="" selected>Select...</option>
                    <option value="available">Avialable</option>
                    <option value="unavailable">Unavailable</option>
                </select>
            </div>
            <div class="form-row">
                <button class="btn btn-primary btn-lg" type="submit">Create product</button>
            </div>
        </form>
    </div>
        
    @endsection
    