@extends('layouts.master')

@section('title')
   <h4>Add Page <a href="{{url('admin/add-page')}}" class="btn btn-primary btn-sm float-end">Add page</a></h4>
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
    <form action="{{url('admin/add-page')}}" method="POST">
         @csrf
        <div class="mb-3">
            <label for="">Page Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="">Slug</label>
            <select name="slug" class="form-control">
                @foreach ($category as $cateitem)
              <option value="{{$cateitem->id}}" >{{$cateitem->slug}}</option>
              @endforeach
            </select>
        </div>
        
        <div class="col-md-3 mb-3">
            <label> Status</label>
            <input type="checkbox" name="status"/>
        </div>
        <div class="mb-3">
            <label for="">Archive</label>
            <input type="number" name="archive" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Sort</label>
            <input type="number" name="sort" class="form-control">
        </div>
        <div class="row">
       <div class="col-md-8">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary float-end">Save Page</button>
        </div>
    </div>

       </div>
    </form>

  </div>



@endsection