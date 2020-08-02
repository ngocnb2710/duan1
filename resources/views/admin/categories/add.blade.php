@extends('admin.dashboard')
@section('content_dashboard')
    <form action="/category/add" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
@stop
