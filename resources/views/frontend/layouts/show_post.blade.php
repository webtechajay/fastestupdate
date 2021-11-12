@extends('frontend.layouts.master')
@section('content')
        <!-- Page Header-->
        
        <header class="masthead" style="background-image: url({{asset('/uploads/image/'.$showPost->image)}})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>{{$showPost->title}}</h1>
                            <h2 class="subheading">{{$showPost->summary}}</h2>
                            <span class="meta">
                                Posted by
                                <a href="#!">{{$showPost->author_name}}</a>
                                on {{$showPost->created_at}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        {{!! $showPost->description !!}}
                    </div>
                </div>
            </div>
       
        </article>
@endsection