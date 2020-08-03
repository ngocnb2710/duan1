@extends('admin.dashboard')
@section('content_dashboard')
    <div class="row content-header">
        <h1 class="col-sm">Products</h1>
        <div class="col-sm text-right">
            <a href="/product/add-product" class="btn btn-primary">Add Product</a>
        </div>
    </div>
    <form action="/product/add" method="post">
        @csrf
        <label for="">Product Name</label>
        <br>
        <input type="text" name="product_name">
        <br>
        <label for="">Price</label>
        <br>
        <input type="text" name="price">
        <br>
        <label for="">Image</label>
        <br>
        <input type="text" name="image">
        <br>
        <label for="">Description</label>
        <br>
        <input type="text" name="description">
        <br>
        <label for="">Category</label>
        <select name="cate_id" id="">
            @foreach($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection
