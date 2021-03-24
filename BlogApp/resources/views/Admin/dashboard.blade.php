@extends('Admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h1">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <a href="/blog-create" class="btn btn-primary">Create</a>
                        <hr>
                        <h3>Your Blog Posts</h3>
                        
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Blog Image</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            
                            <tr>
                                @foreach($blogs as $blog)
                                <td>{{$blog->title}}</td>
                                <td>{{ $blog->category }}</td>
                                <td>
                                  <img src="/storage/blog_images/{{$blog->blog_image}}" alt="" width="100" height="auto"> 
                                </td>
                                 <td><a href="/edit-blog/{{ $blog->id }}" class="btn btn-success">Edit</a></td>
                                  <td>
                                     <form action="/delete-blog/{{$blog->id}}" method="POST">

                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </form>
                                  </td>
                            </tr>  
                            @endforeach
                        </table>
                        
                            
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
