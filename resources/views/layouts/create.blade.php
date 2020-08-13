@extends('layouts.master')

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
                      <input type="text" class="form-control form-control-user" name="judul" value="" id="judul" placeholder="Masukkan Judul" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="isi" value="" id="isi" placeholder="Masukkan Pertanyaan" autocomplete="off">
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