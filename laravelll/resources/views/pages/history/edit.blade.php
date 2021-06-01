@extends('layouts.default')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Riwayat Alumni</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Riwayat ({{$item->id }})</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('history.update',$item->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal :</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" value="{{ old('date') ? old('date') : $item->date }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama lengkap :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="students_id" required>
                                <option value="{{ old('students_id') ? old('students_id') : $item->students_id }}">{{$item->students->full_name}} / ({{$item->students->nim}})</option>
                                @forelse ($alumni as $mahasiswa)
                                <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->full_name }} ({{ $mahasiswa->nim }})</option>
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
                                <option value="{{ old('company_id') ? old('company_id') : $item->company_id }}">{{ $item->company->company_name }}</option>
                                @forelse ($company as $perusahaan)
                                <option value="{{ $perusahaan->id }}">{{ $perusahaan->company_name }}</option>
                                @empty
                                    <option>Data tidak ditemukan</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Posisi :</label>
                        <div class="col-sm-10">
                            <input type="text" name="position" value="{{ old('position') ? old('position') : $item->position }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status :</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" required>
                                <option value="{{ old('status') ? old('status') : $item->status }}">{{ old('status') ? old('status') : $item->status }}</option>
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
                            <input type="text" name="information" value="{{ old('information') ? old('information') : $item->information }}" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection