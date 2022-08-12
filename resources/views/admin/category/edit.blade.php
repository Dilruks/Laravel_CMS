@extends('layouts.master')

@section('title')
   Edit Category
@endsection

@section('main')

<div class="card mt-4">
    <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <form action="{{url('admin/update-category/'.$category->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="">Category Name</label>
                <input type="text" name="name" value="{{$category->name}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Body</label>
                <textarea name="body"  class="ckeditor form-control" >{{$category->body}} </textarea>
            </div>

            <div class="mb-3">
                <label for="">Slug</label>
                <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Parent</label>
                <input type="text" name="parent" value="{{$category->parent}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Image_Id</label>
                <input type="number" name="image_id" value="{{$category->image_id}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Url</label>
                <input type="text" name="url" value="{{$category->url}}" class="form-control">
            </div>

           <h6>Status Mode</h6>
           <div class="row">
            <div class="col-md-3 mb-3">
                <label> Status</label>
                <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}/>
            </div>

           </div>

            <div class="mb-3">
                <label for="">Archive</label>
                <input type="text" name="archive" value="{{$category->archive}}" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Sort</label>
                <input type="number" name="sort" value="{{$category->sort}}">
            </div>
            
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary">Update Category</button>
            </div>

        </form>

    </div>

</div>

@endsection