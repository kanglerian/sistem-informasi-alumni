@extends('layouts.default')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Alumni Tes Kerja</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-file-import text-white-50"></i> Import data (.xlsx)</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Alumni</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('history.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal :</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" value="{{old('date')}}" class="form-control" placeholder="Isi no telp.." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama lengkap :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="students_id" required>
                                <option selected>Pilih Alumni</option>
                                @forelse ($alumni as $item)
                                <option value="{{ $item->id }}">{{ $item->full_name }} ({{ $item->nim }})</option>
                                @empty
                                    <option>Data tidak ditemukan</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama perusahaan :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="company_id" required>
                                <option selected>Pilih Perusahaan</option>
                                @forelse ($company as $item)
                                <option value="{{ $item->id }}">{{ $item->company_name }}</option>
                                @empty
                                    <option>Data tidak ditemukan</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Posisi :</label>
                        <div class="col-sm-10">
                            <input type="text" name="position" value="{{old('position')}}" class="form-control" placeholder="Isi posisi dilamar.." required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" required>
                                <option selected>Pilih</option>
                                <option value="Kirim berkas lamaran">Kirim berkas lamaran</option>
                                <option value="Tes kerja">Tes kerja</option>
                                <option value="Wawancara">Wawancara</option>
                                <option value="Diterima">Diterima</option>
                                <option value="Pending">Pending</option>
                                <option value="Gagal">Gagal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan :</label>
                        <div class="col-sm-10">
                            <input type="text" name="information" value="{{old('information')}}" class="form-control" placeholder="Isi keterangan..">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection