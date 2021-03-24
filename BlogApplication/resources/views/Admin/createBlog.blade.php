@extends('Admin.app');

@section('content')
<div class="container">
    <h1>Create Blog</h1>
    

    <form action="blog-store" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="" class="form-control" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" value="" class="form-control" placeholder="Category">
        </div>

        <div class="form-group">
                <label for="body">Body Text</label>
                <input type="text" name="body"  value="" class="form-control" placeholder="Body">
            </div>
        
        <div class="form-group">
                <label for="blog_image">Blog Image:</label>
                <input type="file" name="blog_image"  id="blog_image">
        </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            @csrf
    </form>
    </div> 
@endsection