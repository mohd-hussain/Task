@extends('Admin.app');

@section('content')
<div class="container">
    <h1>Edit Blog</h1>
    

    <form action="/update-blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" value="{{ $blog->category }}" class="form-control" placeholder="Category">
        </div>

        <div class="form-group">
                <label for="body">Body Text</label>
                <input type="text" name="body"  value="{{ $blog->body }}" class="form-control" placeholder="Body">
            </div>
        <div class="form-group">
            <label for="blog_image">Blog Image:</label>
            @if($blog->blog_image)
            <img src="{{ url('storage/blog_images/' . $blog->blog_image) }}" width="50" height="50" style="margin:10px" />
            @endif
            <input type="file" name="blog_image" value="" id="blog_image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
            
    </form>
    </div> 
@endsection