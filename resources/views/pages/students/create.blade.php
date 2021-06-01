@extends('layouts.default')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Alumni</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-file-import text-white-50"></i> Import data (.xlsx)</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Alumni</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Unggah Foto :</label>
                        <div class="col-sm-10">
                            <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*" class="form-control-file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIM :</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" value="{{ old('nim') }}" class="form-control @error('nim') is-invalid @enderror" placeholder="Isi NIM..">
                        </div>
                        @error('nim') <div class="text-muted">{{message}}</div>  @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama lengkap :</label>
                        <div class="col-sm-10">
                            <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control @error('full_name') is-invalid @enderror" placeholder="Isi nama lengkap..">
                        </div>
                        @error('full_name') <div class="text-muted">{{message}}</div>  @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis kelamin :</label>
                        <div class="col-sm-10">
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                <option value="{{ old('gender')}}">{{ old('gender')}}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal lahir :</label>
                        <div class="col-sm-10">
                            <input type="date" name="birthday" value="{{ old('birthday') }}" class="form-control @error('birthday') is-invalid @enderror">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alumni :</label>
                        <div class="col-sm-10">
                            <input type="text" name="alumni" value="{{ old('alumni') }}" class="form-control @error('alumni') is-invalid @enderror" placeholder="Isi sekolah asal..">
                        </div>
                        @error('alumni') <div class="text-muted">{{message}}</div>  @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telp :</label>
                        <div class="col-sm-10">
                            <input type="text" name="telp" value="{{ old('telp') }}" class="form-control @error('telp') is-invalid @enderror" placeholder="Isi no telp..">
                        </div>
                        @error('tel[') <div class="text-muted">{{message}}</div>  @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email :</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Isi email..">
                        </div>
                        @error('email') <div class="text-muted">{{message}}</div>  @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Isi alamat lengkap...">{{ old('address') }}</textarea>
                        </div>
                        @error('address') <div class="text-muted">{{message}}</div>  @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jurusan :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="major">
                                <option value="{{ old('major') }}">{{ old('major') }}</option>
                                <option value="Manajemen Informatika">Manajemen Informatika
                                </option>
                                <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                                <option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
                                <option value="Manajemen Keuangan Perbankan">Manajemen Keuangan Perbankan
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tahun masuk :</label>
                        <div class="col-sm-10">
                            <input type="text" name="year_sign" value=" {{old('year_sign')}} " class="form-control @error('year_sign') is-invalid @enderror" placeholder="Isi tahun masuk..">
                        </div>
                        @error('year_sign') <div class="text-muted">{{message}}</div>  @enderror
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status :</label>
                        <div class="col-sm-10">
                            <select class="form-control @error('status') is-invalid @enderror" name="status">
                                <option value=" {{old('status')}} ">{{old('status')}}</option>
                                <option value="Sudah bekerja" selected>Sudah bekerja</option>
                                <option value="Belum bekerja">Belum bekerja</option>
                                <option value="Wirausaha">Wirausaha</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Facebook :</label>
                        <div class="col-sm-4">
                            <input type="text" name="facebook" value=" {{old('facebook')}} " class="form-control @error('facebook') is-invalid @enderror" placeholder="facebook.com/yourusername..">
                        </div>
                        <label class="col-sm-2 col-form-label">Instagram :</label>
                        <div class="col-sm-4">
                            <input type="text" name="instagram" value=" {{old('instagram')}} " class="form-control @error('instagram') is-invalid @enderror" placeholder="instagram.com/yourusername..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Youtube :</label>
                        <div class="col-sm-4">
                            <input type="text" name="youtube" value=" {{old('youtube')}} " class="form-control @error('youtube') is-invalid @enderror" placeholder="youtube.com/c/yourusername..">
                        </div>
                        <label class="col-sm-2 col-form-label">Tiktok :</label>
                        <div class="col-sm-4">
                            <input type="text" name="tiktok" value=" {{old('tiktok')}} " class="form-control @error('tiktok') is-invalid @enderror" placeholder="tiktok.com/yourusername..">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection