<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function index()
    // {
    //     $blogs = Blog::latest()->paginate(3);
    //     return view('home',compact('blogs'));
    // }

    public function index(){

        $blogs = Blog::query();

        $selected_category = 'All';
        if(request()->has('category')){
            if(request('category') != 'All') {
                $blogs->where('category', request('category'));
                $selected_category = request('category');
            }
        }
        $blogs = $blogs->latest()->paginate(3);
        $categories = Blog::select('category')->distinct()->get();
        return view('home',compact('blogs','categories','selected_category'));
}

    

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog,$id)
    {
        $blog = $blog->find($id);
        return view('show',compact('blog'));
    }

    
   
}

