@extends('admin.dashboard')
@section('content_dashboard')
    <form action="/product/add" method="post">
        @csrf
        <label for="">Product Name</label>
        <input type="text" name="product_name">
        <label for="">Price</label>
        <input type="text" name="price">
        <label for="">Image</label>
        <input type="text" name="image">
        <label for="">Description</label>
        <input type="text" name="description">
        <select name="cate_id" id="">
            @foreach($category as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection
