@extends('admin.dashboard')
@section('content_dashboard')
    <div class="row">
        <h1 class="col-sm">Collection</h1>
        <div class="col-sm text-right">
            <a href="/category/add-cate" class="btn btn-primary">Add Collection</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
