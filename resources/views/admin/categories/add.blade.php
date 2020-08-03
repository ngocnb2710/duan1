@extends('admin.dashboard')
@section('content_dashboard')
    <div class="row content-header">
        <h1 class="col-sm">Collection</h1>
        <div class="col-sm text-right">
            <a href="/category/add-cate" class="btn btn-primary">Add Collection</a>
        </div>
    </div>
    <section class="content">
        <form action="/category/add" method="post">
            @csrf
            <label for="">Name Category</label>
            <input type="text" name="name">
            <input type="submit" value="Submit">
        </form>
    </section>
@stop
