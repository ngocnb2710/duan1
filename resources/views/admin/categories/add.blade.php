@extends('admin.dashboard')
@section('title', 'Thêm sản danh mục')
@section('content_dashboard')
    <div class="content-header">
        <h1>Thêm danh mục</h1>
    </div>
    <section class="content">
        <form action="/category/add" method="post">
            @csrf
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input class="form-control" type="text" name="name">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </section>
@stop
