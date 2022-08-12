@extends('layouts.master')

@section('title')
<h4>View Widget <a href="{{url('admin/add-widget')}}" class="btn btn-primary btn-sm float-end">Add Widget</a></h4>
@endsection
@section('main')

@if (session('message'))
<div class="card-body">
<div class="alert alert-success">{{session('message')}}</div>
@endif

<table class="table table-boardered">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Description</td>
            <td>Slug</td>
            <td>Type</td>
            <td>Image_id</td>
            <td>status</td>
            <td>archive</td>
            <td>Sort</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($widget as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->image_id}}</td>
            <td>{{$item->status == '1' ? 'Hidden': 'Visible'}}</td>
            <td>{{$item->archive}}</td>
            <td>{{$item->sort}}</td>
            <td>
                <a href="{{url('admin/widget/'.$item->id)}}" class="btn btn-success">Edit</a>
            </td>
            <td>
                <a href="{{url('admin/delete-widget/'.$item->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection
