@extends('admin.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div>
                <h5>Data Pemilih</h5>
                <small class="text-muted">Edit data pemilih</small>
            </div>
            <hr>

            <a href="{{ route('pemilih') }}" class="btn btn-light btn-sm mb-2 bg-white"><i class="fa fa-arrow-left"></i> &nbsp Kembali</a>

            <div class="card">
                <div class="card-header">
                    <b>Edit Pemilih</b>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pemilih.update', ['id' => $pemilih->id]) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Nama</label>
                                <input id="nama" type="text" placeholder="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $pemilih->nama) }}" autocomplete="off">
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
                                <input id="nim" type="number" placeholder="nim" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim', $pemilih->nim) }}" autocomplete="off">

                                @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Jurusan</label>
                                <select class="form-control @error('jurusan_id') is-invalid @enderror" name="jurusan_id">
                                    <option value="" disabled>Pilih Jurusan</option>
                                    <option <?php if(old("jurusan_id", $pemilih->jurusan_id) == "1"){echo "selected='selected'";} ?> value="1">Ilmu Ekonomi</option>
                                    <option <?php if(old("jurusan_id", $pemilih->jurusan_id) == "2"){echo "selected='selected'";} ?> value="2">Akutansi</option>
                                    <option <?php if(old("jurusan_id", $pemilih->jurusan_id) == "3"){echo "selected='selected'";} ?> value="3">Manajement</option>
                                </select>

                                @error('jurusan_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Email</label>
                                <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $pemilih->email) }}" autocomplete="off">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option value="" disabled>Pilih Status</option>
                                    <option <?php if(old("status", $pemilih->status) == "0"){echo "selected='selected'";} ?> value="0">Belum Diverifikasi</option>
                                    <option <?php if(old("status", $pemilih->status) == "1"){echo "selected='selected'";} ?> value="1">Diverifikasi</option>
                                    <option <?php if(old("status", $pemilih->status) == "2"){echo "selected='selected'";} ?> value="2">Ditolak</option>
                                </select>

                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group has-feedback">
                                <label class="text-dark">Password</label>
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                <small class="text-muted"><i>Kosongkan jika tidak ingin mengubah password</i></small>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
