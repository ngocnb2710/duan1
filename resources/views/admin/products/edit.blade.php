@extends('admin.dashboard')
@section('content_dashboard')
    <form action="/product/edit/{{$product->id}}" method="post">
        @csrf
        <label for="">Product Name</label>
        <input type="text" name="product_name"  value="{{$product->product_name}}">
        <label for="">Price</label>
        <input type="text" name="price" value="{{$product->price}}">
        <label for="">Image</label>
        <input type="text" name="image" value="{{$product->image}}">
        <label for="">Description</label>
        <input type="text" name="description" value="{{$product->description}}">
        <select name="cate_id" id="">
            @foreach($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection
