@extends('layouts.master')

@section('title')
   <h4>Edit Page <a href="{{url('admin/page')}}" class="btn btn-danger btn-sm float-end">Back</a></h4>
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

    <form action="{{url('admin/update-page/'.$page->id)}}" method="POST">
         @csrf
         @method('PUT')
        <div class="mb-3">
            <label for="">Page Name</label>
            <input type="text" name="name" value="{{$page->name}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <textarea name="description" class="form-control">{!!$page->description!!}</textarea>
        </div>
        <div class="mb-3">
            <label for="">Slug</label>
            <select name="slug" required class="form-control">
                <option value="">--Select Slug--</option>
                @foreach ($category as $cateitem)
              <option value="{{$cateitem->id}}" {{$page->category_id == $cateitem->id ? 'selected' : ''}} >
                {{$cateitem->slug}}
            </option>
              @endforeach 
            </select>
        </div>
        
        <div class="col-md-3 mb-3">
            <label> Status</label>
            <input type="checkbox" name="status"value="{{$page->status}}"/>
        </div>
        <div class="mb-3">
            <label for="">Archive</label>
            <input type="number" name="archive" value="{{$page->archive}}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Sort</label>
            <input type="number" name="sort" value="{{$page->sort}}" class="form-control">
        </div>
        <div class="row">
       <div class="col-md-8">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary float-end">Update Page</button>
        </div>
    </div>

       </div>
    </form>

  </div>



@endsection