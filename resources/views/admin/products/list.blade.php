@extends('admin.dashboard')
@section('title', 'Danh sách sản phẩm')
@section('content_dashboard')
    <div class="row content-header">
        <h1 class="col-sm">Products</h1>
        <div class="col-sm text-right">
            <a href="/product/add-product" class="btn btn-primary">Add Product</a>
        </div>
    </div>
    <section class="content">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->price}} đ</td>
                    <td><img width="100px" src="{{$item->image}}" alt=""></td>
                    <td>{{$item->description}}</td>
                    <td><a href="/product/edit-form/{{$item->id}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="/product/delete/{{$item->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@stop
