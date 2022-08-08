@extends('layouts.master')

@section('title')
   <h4>View Category <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end">Add Category</a></h4>
    @if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
@endsection
@section('main')

<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Body</th>
          <th scope="col">Slug</th>
          <th scope="col">Parent</th>
          <th scope="col">Image_Id</th>
          <th scope="col">Url</th>
          <th scope="col">Status</th>
          <th scope="col">Archive</th>
          <th scope="col">Sort</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($category as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->body}}</td>
          <td>{{$item->slug}}</td>
          <td>{{$item->parent}}</td>
          <td>{{$item->image_id}}</td>
          <td>{{$item->url}}</td>
          <td>{{$item->status == '1'? 'Hidden' : 'Shown'}}</td>
          <td>{{$item->archive}}</td>
          <td>{{$item->sort}}</td>
          <td>
            <a href="{{url('admin/edit-category/'.$item->id)}}" class="btn btn-success">Edit</a>
          </td>
          <td>
            <a href="{{url('admin/delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
  </table>
@endsection