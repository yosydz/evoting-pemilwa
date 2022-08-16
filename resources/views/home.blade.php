@extends('master')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container" style="background: #3a405a;border-radius: 30px;">
    <div class="row">
        <div class="col-md-7">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2 class="font-weight-bold text-white px-4">Pemilihan Ketua Himpunan Jurusan Fakultas Ekonomi dan Bisnis 2021<br> <small>Universitas Brawijaya</small></h2>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div class="col-md-5">
            <br>
           <img src="{{ asset('gambar/sistem/depan.jpg') }}" style="width: 100%">
        </div>
    </div>
</div>
<br>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-2">
    <img src="{{ asset('gambar/sistem/Akuntansi/logo baru hmja feb ub.png') }}" width="150px" height="80px" >
    </div>
    <div class="col col-lg-2">
    <img src="{{ asset('gambar/sistem/Ilmu Ekonomi/1641124597997.jpeg') }}" width="150px" height="80px" >
    </div>
    <div class="col col-lg-2">
    <img src="{{ asset('gambar/sistem/Manajemen/HMJM 2.png') }}" width="150px" height="100px" >

    </div>
  </div>

@endsection
