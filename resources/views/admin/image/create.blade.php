@extends('layouts.master')

@section('title')
   <h4>Add Image <a href="{{url('admin/add-image')}}" class="btn btn-primary btn-sm float-end">Add Image</a></h4>
    @if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
@endsection
@section('main')

<div class="card-body">
    @if($errors->any())
    <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
    </div>
    @endif

    <form action="{{url('admin/add-image')}}" method="POST">
     @csrf
        <div class="mb-3">
            <label for="">Image Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Uni</label>
            <input type="number" name="uni" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Ext</label>
            <textarea name="ext" rows="1" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="">Archive</label>
            <input type="number" name="archive" class="form-control">
        </div>

        <h6>Status Mode</h6>
        <div class="row">
         <div class="col-md-3 mb-3">
             <label> Status</label>
             <input type="checkbox" name="status"/>
         </div>
          <div class="col-md-6">
           <button type="submit" class="btn btn-primary">Save Image</button>
          </div>
    </form>

</div>

@endsection