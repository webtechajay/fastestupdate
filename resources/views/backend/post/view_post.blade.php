@extends('backend.layouts.master')


@section('content')

  <section class="content">

    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">View Post</h3>
              </div>
             </div>
             

             <!-- Start -->

               <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Summury</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            @foreach($viewPost as $key=>$post)
                            <tr>
                                <td>{{ $post->$key+1 }}</td>
                                <td>{{ $post->title }}</td>

                                <td>
                                @if(!empty($post->image))
                                <img src="{{asset('/uploads/image/'.$post->image)}}" alt="" style="width:50px;">
                                @endif
                                </td>
                                <td>{{ $post->summary }}</td>
                                <td>{{ $post->author_name }}</td>
                                <td>{{str_limit( $post->description ,100)}}</td>
                                <td>
                                  <div>
                                  <a href="{{url('edit/post',$post->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                  <a href="{{url('delete/post',$post->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                  <a href="{{url('show/post',$post->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-eye"></i></a>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
             
      </div>
      </div>
    </div>
</section>


@endsection





