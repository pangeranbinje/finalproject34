@extends('layouts.master')

@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>    
@endpush

@section('content')

<div class="card card-widget">
              <div class="card-header">
                <div class="user-block" >
                  <img class="img-circle" src="../../dist/img/user1-128x128.jpg" alt="User Image">
                  <div class="judul"><h4><a href="#">&nbsp;{{ $tampil->judul }}</a></h4></div>
                  <span class="description">{{ $tampil->created_at }}</span>
                  <span class="user"></span>
                </div>
                <!-- /.user-block -->
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- post text -->
                {!! $tampil->isi !!}
                <!-- Attachment -->
                
                <!-- /.attachment-block -->

                
              </div>
              <!-- /.card-footer -->
              <!-- /.card-footer -->
            </div>
            <div>
            <form class="user" method="POST" action="/index/jawab">
                   @csrf   
                    <div class="form-group">
                      <textarea name="jawaban" class="form-control my-editor" placeholder="jawaban"></textarea>
                    </div>
                    <div class="form-group" style="">
                    <button class="btn btn-primary btn-user btn-block">
                      Submit
                    </button>
                  </form>
</div>

@endsection
@push('scripts')
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endpush