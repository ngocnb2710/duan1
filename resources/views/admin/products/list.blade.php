@extends('admin.dashboard')
@section('content_dashboard')
    <div class="row">
        <h1 class="col-sm">Products</h1>
        <div class="col-sm text-right">
            <a href="/product/add-product" class="btn btn-primary">Add Product</a>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->product_name}}</td>
                <td>{{$item->price}}</td>
                <td><img width="500px" src="{{$item->image}}" alt=""></td>
                <td>{{$item->description}}</td>
                <td><a href=""></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
