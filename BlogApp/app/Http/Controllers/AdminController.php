<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class AdminController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('Admin.dashboard',compact('blogs'));
    }

    public function createBlog(){

        return view('Admin.createBlog');
    }


    public function storeBlog(Request $request){

        $this->validate($request,[
            'title' => 'required|max:255',
            'category' => 'required',
            'body' => 'required',
            'blog_image' => 'image|nullable|max:1999',
        ]);

        if($request->hasFile('blog_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('blog_image')->getClientOriginalName();
            //Get Just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Ext
            $extention = $request->file('blog_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            //Upload Image
            $path = $request->file('blog_image')->storeAs('public/blog_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        
        $blog = new Blog();
        $blog->title = request('title');
        $blog->category = request('category');
        $blog->body = request('body');
        // $blog->user_id= auth()->user()->id;
        $blog->blog_image = $fileNameToStore;
        $blog->save();

        return redirect('/dashboard')->with('success','Blog Created Successfully');
    }

    


    public function editBlog($id){

        $blog = Blog::find($id);
        return view('Admin.editBlog',compact('blog'));
    }


    public function updateBlog(Request $request, $id){

        $this->validate($request,[
            'title' => 'required|max:255',
            'category' => 'required',
            'body' => 'required',
            'blog_image' => 'image|nullable|max:1999',
        ]);

        if($request->hasFile('blog_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('blog_image')->getClientOriginalName();
            //Get Just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just Ext
            $extention = $request->file('blog_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extention;
            //Upload Image
            $path = $request->file('blog_image')->storeAs('public/blog_images',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        $blog = Blog::find($id);
 
        $blog->title = request('title');
        $blog->category = request('category');
        $blog->body = request('body');
        $blog->blog_image = $fileNameToStore;
        $blog->save();    

        return redirect('/dashboard')->with('success','blog Updated Successfully');
    }


    public function deleteBlog($id){

        $blog = blog::find($id);
        $blog->delete();
        return redirect('/dashboard')->with('success','blog Deleted Succesfully');
    }
    
    
}
