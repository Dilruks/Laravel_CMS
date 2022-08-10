@extends('layouts.master')

@section('title')
<h4>View Image <a href="{{url('admin/add-image')}}" class="btn btn-primary btn-sm float-end">Add Image</a></h4>
@endsection
@section('main')

@if (session('message'))
<div class="card-body">
<div class="alert alert-success">{{session('message')}}</div>
@endif

<table class="table table-boarder">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Uni</th>
            <th>Ext</th>
            <th>Archive</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($image as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->uni}}</td>
            <td>{{$item->ext}}</td>
            <td>{{$item->archive}}</td>
            <td>{{$item->status == '1' ? 'Hidden':'Shown'}}</td>
            <td>
                <a href="{{url('admin/edit-image/'.$item->id)}}" class="btn btn-success">Edit</a>
            </td>
            <td>
                <a href="{{url('admin/delete-image/'.$item->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection