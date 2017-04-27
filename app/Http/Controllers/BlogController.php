<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Validation;
use Input;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myblog()
    {
        $blogs = Blog::orderBy('id', 'desc')->where('user_id', auth()->user()->id)->paginate(10);
        $categories = Category::all();
        return view('blog.myblog')
                        ->with('title', 'Article written by Me')
                        ->with('blogs', $blogs)
                        ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');
        return view('blog.create')
                ->with('title', 'Write an Article')
                ->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
       
        $data = $request->all();
        $blog = new Blog();
        $blog->title = $data['title'];
        $blog->category_id = $data['category_id'];
        $blog->details = $data['details'];
        $blog->user_id = auth()->user()->id;
        // $blog->published = 'no'; // for admin approval status is by default no
        // $blog->cover_img = null;
        $blog->tags =  $data['tags'];
        if($blog->save()) {
            return redirect()->route('blog.myblog')->with('success','Article Created Successfully');
        } else {
            return redirect()->route('blog.myblog')->with('error','Something went wrong.Please, try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::lists('name', 'id');
        return view('blog.edit')
                        ->with('title', 'Edit this Article')
                        ->with('blog', $blog)
                        ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $data = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->title = $data['title'];
        $blog->category_id = $data['category_id'];
        $blog->details = $data['details'];
        $blog->user_id = auth()->user()->id;
        // $blog->published = 'no'; // for admin approval status is by default no
        // $blog->cover_img = null;
        $blog->tags =  $data['tags'];
        if($blog->save()) {
            return redirect()->route('blog.myblog')->with('success','Changes Saved');
        } else {
            return redirect()->route('blog.myblog')->with('error','Something went wrong. Please, try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            BLog::destroy($id);

            return redirect()->route('blog.myblog')->with('success','Article Deleted Successfully.');

        }catch(Exception $ex){
            return redirect()->route('blog.myblog')->with('error','Something went wrong.Try Again.');
        }
    }


    public function pending_list(){


         $blogs = Blog::all();
        //$blogs = Blog::get(['title' , 'id', 'category_id', 'user_id']);

        return view('admin.blog.list')
                ->with('title', 'List of All Pending Blogs')
                ->with('blogCounter', 1)
                ->with('blogs', $blogs);


    }



      public function AcceptBlog($id)
      {


            $blog = Blog::where('id' , $id)->first();
        
            $blog->published = "yes";

            $blog->save();

            $blogs = Blog::all();

            return view('admin.blog.list')
                ->with('title', 'List of All Pending Blogs')
                ->with('blogCounter', 1)
                ->with('blogs', $blogs);
        
      }

       
                        

 
    


 public function AdminSingleBlog($id){
       
        return "ddccd";




    }




   

  
    public function ignoreBlog($id){

        $blog = Blog::where('id' , $id)->first();

        $blog->delete();


    }



}
