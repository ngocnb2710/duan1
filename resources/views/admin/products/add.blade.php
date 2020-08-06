@extends('admin.dashboard')
@section('title', 'Thêm sản phẩm')
@section('content_dashboard')
    <div class="content-header">
        <h1>Thêm sản phẩm</h1>
    </div>
    <form action="/product/add" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="">Product Name</label>
            <input class="form-control" type="text" name="product_name">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input class="form-control" type="text" name="price">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input class="form-control" type="text" name="image">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input class="form-control" type="text" name="description">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select class="form-control" name="cate_id" id="">
                @foreach($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
