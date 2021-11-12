@extends('backend.layouts.master')


@section('content')

  <section class="content">

    <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">Add Post</h3>
              </div>
             </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{url('store/post')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  

                  <div class="form-group">
                    <label for="member_name">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                  </div>

                  <div class="form-group">
                    <label for="summary">Summary</label>
                    <input type="text" name="summary" class="form-control" id="summary" placeholder="Enter Summary">
                  </div>


                  <div class="form-group">
                    <label for="author_name">Author Name</label>
                    <input type="text" name="author_name" class="form-control" id="author_name" placeholder="Enter Author Name">
                  </div>

                   <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
                    </div> 

                 



                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
      </div>
      </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 100,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount',
                'image',
                'media'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help|'+ 'media|' + 'image |',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });

 

    </script>
@endsection





