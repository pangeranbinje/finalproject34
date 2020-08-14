@extends('layouts.master')

@push('script-head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>    
@endpush

@section('content')
<form class="user" method="POST" action="/index/answer">
<div class="card shadow mb-4">
  <!-- Card Header - Dropdown -->
  <div class="m-0 card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-grey"></h6>
    <div class="dropdown no-arrow">
    </div>
  </div>
  <!-- Card Body -->
  <div class="card-body">
   
  </div>
  <div class="form-group">
    <textarea name="jawaban" class="form-control my-editor" placeholder="Masukkan Pertanyaan">{!! old('content', $content ?? '') !!}</textarea>
  </div> 
  <button class="btn btn-primary">
    Answer
  </button>
</div>

</form>

@endsection

{{-- {{ $pst->judul }} --}}
{{-- {!! $pst->isi !!} --}}
{{-- {{ $pst->created_at }} --}}

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