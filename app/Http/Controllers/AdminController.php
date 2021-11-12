<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class AdminController extends Controller
{
    public function index()
    {
    	return view('backend.layouts.index');
    }

    public function addPost()
    {
    	return view('backend.post.add_post');
    }

    public function storePost(Request $request)
    {
    	$storePost = new Blog();
    	$storePost->title = $request->title;

        if($request->hasfile('image')){
          $img_tmp = $request->file('image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // Items::make($img_tmp)->resize(190,270);

          $storePost->image = $filename;
        }
    }

    	$storePost->summary = $request->summary;
    	$storePost->author_name = $request->author_name;
    	$storePost->description = $request->description;
    	$storePost->save();

    	return redirect('add/post');
    }

    public function viewPost()
    {
    	$viewPost = Blog::all();

    	return view('backend.post.view_post',compact('viewPost'));
    }

    public function editPost($id)
    {
        $editPost = Blog::find($id);

        return view('backend.post.edit_post',compact('editPost'));
    }

    public function updatePost(Request $request,$id)
    {
        $updatePost = Blog::find($id);
        $updatePost->title = $request->title;

        if($request->hasfile('image')){
          $img_tmp = $request->file('image');
          if($img_tmp->isValid()){

          //image path code
          $extension = $img_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $img_path = public_path('/uploads/image'); 
          $img_tmp->move($img_path,$filename);

          //image resize
          // Items::make($img_tmp)->resize(190,270);

          $updatePost->image = $filename;
        }
    }
    
        $updatePost->summary = $request->summary;
        $updatePost->author_name = $request->author_name;
        $updatePost->description = $request->description;
        $updatePost->save();


        return redirect('/view/post');

    }

    public function deletePost($id)
    {
        $deletePost = Blog::find($id);
        $deletePost->delete();

        return redirect('/view/post');
    }

    

}
