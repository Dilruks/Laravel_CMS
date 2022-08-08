@extends('layouts.master')

@section('title')
   Add Category
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

        <form action="{{url('admin/add-category')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="">Category Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Body</label>
                <textarea name="body" id=""  rows="3" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Parent</label>
                <input type="text" name="parent" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Image_Id</label>
                <input type="number" name="image_id" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Url</label>
                <input type="text" name="url" class="form-control">
            </div>

           <h6>Status Mode</h6>
           <div class="row">
            <div class="col-md-3 mb-3">
                <label> Status</label>
                <input type="checkbox" name="navbar_status"/>
            </div>

           </div>

            <div class="mb-3">
                <label for="">Archive</label>
                <input type="number" name="archive" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Sort</label>
                <input type="number" name="sort" class="form-control">
            </div>
            
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary">Save Category</button>
            </div>

        </form>

    </div>

</div>

@endsection