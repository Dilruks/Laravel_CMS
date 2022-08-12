@extends('layouts.master')

@section('title')
   <h4>Edit Widget <a href="{{url('admin/add-widget')}}" class="btn btn-primary btn-sm float-end">Add Widget</a></h4>
    @if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
@endsection
@section('main')

@if($errors->any())
<div class="alert alert-danger">
@foreach ($errors->all() as $error)
    <div>{{$error}}</div>
@endforeach
</div>
@endif

  <div class="card-body">
    <form action="{{url('admin/update-widget/'.$widget->id)}}" method="POST">
         @csrf
        <div class="mb-3">
            <label for=""> Name</label>
            <input type="text" name="name" value="{{$widget->name}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <textarea class="ckeditor form-control"  name="description">{{$widget->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="">Slug</label>
            <select name="slug" required class="form-control">
                <option value="">--Select Slug--</option>
                @foreach ($category as $cateitem)
              <option value="{{$cateitem->id}}" {{$widget->category_id == $cateitem->id ? 'selected' : ''}} >
                {{$cateitem->slug}}
            </option>
              @endforeach 
            </select>
        </div>
        <div class="mb-3">
            <label for="">Type</label>
            <select name="type" class="form-control" value="{{$widget->type}}">
            </select>
        </div>
        <div class="mb-3">
            <label for="">Image_id</label>
            <input type="number" name="image_id"  value="{{$widget->image_id}}"  class="form-control">
        </div>
        
        <div class="col-md-3 mb-3">
            <label> Status</label>
            <input type="checkbox" name="status" value="{{$widget->status}}" />
        </div>
        <div class="mb-3">
            <label for="">Archive</label>
            <input type="number" name="archive"  value="{{$widget->archive}}"  class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Sort</label>
            <input type="number" name="sort"  value="{{$widget->sort}}"  class="form-control">
        </div>
        <div class="row">
       <div class="col-md-8">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary float-end">Update Widget</button>
        </div>
    </div>

       </div>
    </form>

  </div>



@endsection