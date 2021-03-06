@extends('frontend.layouts.master')

@section('content')

<header class="masthead" style="background-image: url('{{asset('frontend/assets/img/home-bg.jpg')}}">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <!-- <span class="subheading">A Blog Theme by Start Bootstrap</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>



<section>
    <div class="container">
    	
       
        @if(isset($showBlogs))

        <div class="row">
    @foreach($showBlogs as $post)
    <div class="col-sm-6 col-md-3 mt-3">
        <div class="card" style="padding: 10px;">
            <div class="card-block">
                <a href="">
                    <h4 class="card-title">
                        
                    </h4>
                </a>
            </div>
            <a href="{{route('post.show', $post->id)}}">
                <img alt="Responsive image" class="img-fluid" src="{{asset('/uploads/image/'.$post->image)}}" style="width:250px;height:200px;" />
            </a>
            <div class="card-block">
                <div class="mt-2">
                <a class="card-link btn btn-sm btn-primary" href="{{route('post.show', $post->id)}}">
                    {{str_limit($post->summary,90)}}
                </a>
                </div>
                <div class="mt-2">
                    <a class="card-link btn btn-sm btn-secondary" href="#">
                    Posted by :- <i>{{$post->author_name}}</i> on {{$post->created_at}}
                </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

     @elseif(isset($message))
         <p>{{ $message }}</p>
         @endif


        </div>

</div>
</section>



@endsection