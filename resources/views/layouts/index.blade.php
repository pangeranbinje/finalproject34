@extends('layouts.master')

@section('content')

<div>
<a href="/index/create" class="btn btn-primary btn-icon-split ">
  <span class="text">Create Your Question</span>
</a>
</div>
<div class="mt-3">

@foreach ($post as $pst)
<div class="card card-widget">
              <div class="card-header">
                <div class="user-block" >
                  <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                  <div class="judul"><h4><a href="#">&nbsp;{{ $pst->judul }}</a></h4></div>
                  <span class="description">{{ $pst->created_at }}</span>
                  <span class="user"></span>
                </div>
                <!-- /.user-block -->
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- post text -->
                {!! $pst->isi !!}
                <!-- Attachment -->
                
                <!-- /.attachment-block -->

                <!-- Social sharing buttons -->
                <a href="/index/{{$pst->id}}/answer" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Answer </a>
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> vote</button>
                <span class="float-right text-muted">45 likes - 2 comments</span>
              </div>
              <!-- /.card-body -->
              <div class="card-footer card-comments">
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Maria Gonzales
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Nora Havisham
                      <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    The point of using Lorem Ipsum is that it hrs a morer-less
                    normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
              </div>
              <!-- /.card-footer -->
              <!-- /.card-footer -->
            </div>
@endforeach

</div>
@endsection