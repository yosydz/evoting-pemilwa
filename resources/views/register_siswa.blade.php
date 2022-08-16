@extends('master')

@section('content')
<div class="container">

     @if(session('alert'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('alert') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-4">




            <div class="card">
                <div class="card-header">Register Pemilih</div>

                <div class="card-body">
                 <form method="POST" action="{{ route('depan.register.siswa.aksi') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <label class="text-dark">Nama</label>
                            <input id="nama" type="text" placeholder="Nama Lengkap" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" autocomplete="off">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <label class="text-dark">NIM</label>
                            <input id="nim" type="number" placeholder="NIM Mahasiswa" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" autocomplete="off">
                            @error('nim')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <label class="text-dark">Password</label>
                            <input id="password" type="password" placeholder="**********" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autocomplete="off">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <label class="text-dark">Email</label>
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group has-feedback">
                            <label class="text-dark">Jurusan</label>
                            <select class="form-control @error('jurusan_id') is-invalid @enderror" name="jurusan_id" id="jurusan_id">
                                <option value="" selected disabled>Pilih Jurusan</option>
                                    @foreach ($jurusan as $kg)
                                        <option value="{{ $kg->id }}">{{ $kg->jurusan }}</option>
                                    @endforeach
                            </select>
                            @error('jurusan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <input type="hidden" value="0" name="status" id="status">

                    <div class="form-group text-center mt-5">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
