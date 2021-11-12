<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use DB;
use App\Contact;

class BlogController extends Controller
{
    public function index()
    {
    	// $viewPost = Blog::all();
    	$viewPost = DB::select("select blogs.id,blogs.created_at, blogs.title,blogs.summary,blogs.author_name from blogs order by id desc");
    	

    	return view('frontend.layouts.index',compact('viewPost'));
    }

    public function showPost($id)
    {
        $showPost = Blog::find($id);
        // dd($showPost);
        return view('frontend.layouts.show_post',compact('showPost'));
    }

    public function indexTwo()
    {
        $viewPost = DB::select("select blogs.id,blogs.created_at, blogs.title,blogs.image,blogs.summary,blogs.author_name,blogs.description from blogs order by id desc");
        return view('frontend.layouts.index_two',compact('viewPost'));
    }

    public function about()
    {
        return view('frontend.layouts.about');
    }

    public function contact()
    {
        return view('frontend.layouts.create_contact');
    }

    public function storeContact(Request $request)
    {
        $storeContact = new Contact();
        $storeContact->name = $request->name;
        $storeContact->email = $request->email;
        $storeContact->phone = $request->phone;
        $storeContact->message = $request->message;
        $storeContact->save();

        return redirect('/contact');
    }
}
