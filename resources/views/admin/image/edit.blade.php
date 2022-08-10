@extends('layouts.master')

@section('title')
   <h4>Edit Image <a href="{{url('admin/add-image')}}" class="btn btn-primary btn-sm float-end">Add Image</a></h4>
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

    <form action="{{url('admin/update-image/'.$image->id)}}" method="POST">
     @csrf
     @method('PUT')
        <div class="mb-3">
            <label for="">Image Name</label>
            <input type="text" value="{{$image->name}}" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Uni</label>
            <input type="number" name="uni" value="{{$image->uni}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Ext</label>
            <textarea name="ext" rows="1"  class="form-control">{{$image->ext}}</textarea>
        </div>
        <div class="mb-3">
            <label for="">Archive</label>
            <input type="number" name="archive" value="{{$image->archive}}" class="form-control">
        </div>

       
        <h6>Status Mode</h6>
        <div class="row">
         <div class="col-md-3 mb-3">
             <label> Status</label>
             <input type="checkbox" name="status" {{$image->status == '1' ? 'checked':''}}/>
         </div>

        </div>
          <div class="col-md-6">
           <button type="submit" class="btn btn-primary">Uptate Image</button>
          </div>
    </form>

</div>




@endsection