@extends('layouts.master')


@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>    
@endpush

@section('content')
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Insert Your Question</h1>
                  </div>

                  <form class="user" method="POST" action="/index/create">
                   @csrf   
                   <div class="form-group">
                   <label for="judul"></label>
                    <input type="text" class="form-control form-control-user" name="judul" id="judul" placeholder="Masukkan Judul">
                   </div>    
                    <div class="form-group">
                    <label for="isi"></label>
                      <textarea name="isi" class="form-control my-editor" placeholder="Masukkan Pertanyaan">{!! old('content', $content ?? '') !!}</textarea>
                    </div>
                    <div class="form-group" style="">
                    <label>Tag #</label>
                    <input style="" name="tag" id="tag" type="text" value="" data-role="tagsinput" placeholder="Masukkan Tag Disini">
                    <!-- <input class="form-control" name="tag" data-role="tagsinput" type="text"> -->
                    <p style="background: #eee;
                       padding: 10px;
                       border: 1px solid #ccc;
                       font-size: 12px;
                       " class="help-block">Gunakan tombol enter, koma, atau spasi untuk membuat tag baru, untuk menghapus gunakan backspace</p>
                    </div>      
                    <button class="btn btn-primary btn-user btn-block">
                      Submit
                    </button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('BStemplate/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('BStemplate/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('BStemplate/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('BStemplate/js/sb-admin-2.min.js') }}"></script>

</body>
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