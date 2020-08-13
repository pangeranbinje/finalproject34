@extends('layouts.master')

@section('content')


<a href="/index/create" class="btn btn-primary btn-icon-split ">
  <span class="text">Create Your Question</span>
</a>
<br><br>

@foreach ($post as $pst)

<div class="card shadow mb-4">
  <!-- Card Header - Dropdown -->
  <div class="m-0 card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <a href="#" class="btn btn-success btn-circle btn-sm">
      <i class="fas fa-check"></i>
    </a>
    <h6 class="m-0 font-weight-bold text-grey">{{ $pst->judul }}</h6>
    <div class="dropdown no-arrow">
      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-ellipsis-v fa-sm fa-fw text-grey-400"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
        <a class="dropdown-item" href="#">UpVote(Autentikasi)</a>
        <a class="dropdown-item" href="#">DownVote(Autentikasi)</a>
        <a class="dropdown-item" href="#">Jawaban(Autentikasi)</a>
        <a class="dropdown-item" href="#">Komentar(Autentikasi)</a>
      </div>
    </div>
  </div>
  <!-- Card Body -->
  <div class="card-body">
    {{ $pst->isi }}
  </div>
  <div class="card-body">
    Belom Ada Jawaban
  </div>
  <span class="badge badge-info">{{ $pst->created_at }}</span>
</div>
@endforeach
@endsection