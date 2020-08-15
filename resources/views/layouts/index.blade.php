@extends('layouts.master')

@section('content')

<div>
<a href="/index/create" class="btn btn-primary btn-icon-split ">
  <span class="text">Create Your Question</span>
</a>
</div>
<div>
<div class="mt-3">
<<<<<<< HEAD

@foreach ($post ?? '' as $pst)
=======
@foreach ($post as $pst)
>>>>>>> 660cedfde8e87a0d463c81cf6d2c7dccc60c5943
<div class="card card-widget">
              <div class="card-header">
                <div class="user-block" >
                  <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                  <div class="judul"><h4><a href="#">&nbsp;{{ $pertanyaan->judul }}</a></h4></div>
                  <span class="description">{{ $pertanyaan->created_at }}</span>
                  <span class="user"></span>
                  <div class="judul"><h4><a href="#">&nbsp;{{ $pst->judul }}</a></h4></div>
                  <span class="description">{{ $pst->created_at }}</span>
                  <span class="user">   {!! $pst->isi !!}</span>
                </div>
                <!-- /.user-block -->
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
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
            belom dipasang comment 

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
                    belom dipasang comment
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
              </div>
              <!-- /.card-footer -->
              <!-- /.card-footer -->
            </div>
@endforeach
{{ $post->links() }}
</div>

</div>
@endsection